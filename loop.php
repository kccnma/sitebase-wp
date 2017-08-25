<?php
/**
 * Just displays a post loop. Intended to work with SiteOrigin page builder loop widget.
 *
 * Loop Name: Loop
 *
 */
?>
<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="post-item">

			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php the_post_thumbnail('full', array('class' => 'scale-with-grid')); ?>
				</a>
			<?php endif; ?>

			<h4 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
			<?php the_content(); ?>

		</div>

	<?php endwhile; ?>

	<!--<?php the_posts_navigation(); ?>-->

<?php endif; ?>