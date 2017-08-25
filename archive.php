<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>

	<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
	?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="post-item">

			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php the_post_thumbnail('full', array('class' => 'scale-with-grid')); ?>
				</a>
			<?php endif; ?>

			<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>

		</div>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

<?php else : ?>

	<h1>Page not found</h1>
    
    <p>Sorry, the page you are looking for is not available. It may have moved, or you may have followed a bad link. Please 
    <a href="<?php bloginfo('url') ?>">visit our homepage</a> to find what you're looking for.</p>

<?php endif; ?>


<?php get_footer(); ?>
