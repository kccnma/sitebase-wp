<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the main content area and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

    </div>
</main>

<footer class="site-footer">
    <div class="container">
        <nav class="site-navigation">
        
		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
        

        </nav>
    </div>
</footer>

<!-- MAIN JS -->
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

<?php wp_footer(); ?>

</body>
</html>
