<?php
/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function my_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	return $classes;
}
add_filter( 'body_class', 'my_theme_body_classes' );

if ( ! function_exists( 'sitebase_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sitebase_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'sitebase' ),
		'secondary' => esc_html__( 'Secondary Menu', 'sitebase' )
	) );
    
    /* Disable WordPress Admin Bar for all users but admins. */
    show_admin_bar(false);
    
}
endif; // sitebase_setup
add_action( 'after_setup_theme', 'sitebase_setup' );


/**
 * Enqueue scripts and styles.
 */
function sitebase_scripts() {
	wp_enqueue_style( 'sitebase-style', get_stylesheet_uri() );

	wp_enqueue_script(
		'custom-script',
		get_stylesheet_directory_uri() . '/js/script.js',
		array(), 
       '', 
       true
	);

}
add_action( 'wp_enqueue_scripts', 'sitebase_scripts' );



?>