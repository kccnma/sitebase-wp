<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until the main content area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
 
<!-- HTML5 -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- VIEWPORT FOR MOBILE -->
<meta name="viewport" content="width=device-width, initial-scale=1" />

<?php wp_head(); ?>

</head>

<body>

<header class="site-header toggle-nav">
    <div class="container">
        <div class="site-branding">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!--<p class="site-description"><?php bloginfo( 'description' ); ?></p>-->
		</div>
        
		<nav class="site-navigation" role="navigation">
            <div class="menu-button navicon">Menu</div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
    </div>
</header>

<main class="site-main">
    <div class="container">
