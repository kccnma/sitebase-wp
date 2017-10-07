<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>

	<?php if ( is_home() && ! is_front_page() ) : ?>
			<h1 class="page-title"><?php single_post_title(); ?></h1>
	<?php endif; ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php if (is_page()) : /* show page contents */ ?>
    
            <div class="pagecontent" id="post-<?php the_ID(); ?>">

				<?php if ( ! is_front_page() ) : ?>
		            <h1 class="page-title"><?php the_title(); ?></h1>
				<?php endif; ?>

                <?php the_content('Read more &gt;'); ?> 
                <p><?php wp_link_pages('next_or_number=number&pagelink=page %'); ?></p>
            </div>
        
        <?php else : /* show post contents */ ?>

            <div class="post" id="post-<?php the_ID(); ?>">

            	<div class="featured-image">
				<?php if ( has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail('full', array('class' => 'scale-with-grid')); ?>
					</a>
				<?php endif; ?>
				</div>

                <article class="postcontent">
                    
                    <?php if (!is_single()) : ?>
                        <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php else : ?>
                        <h1 class="post-title"><?php the_title(); ?></h1>
                    <?php endif; ?>

                    	<p class="date"><?php the_date() ?> </p>
                    	<p class="author">By  <?php the_author_link(); ?></p>
                    
                    <?php the_content('Read more &gt;'); ?> 
                    <p><?php wp_link_pages('next_or_number=number&pagelink=page %'); ?></p>    
                </article>
                <div class="postmeta">
                    <p class="tags"><?php the_tags('Tags: ', ', ', ' '); ?></p>
                    <p class="categories">Categories: <?php the_category(', ') ?></p>
                </div>
            </div>
        <?php endif; /* end if page or post */ ?>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

<?php else : ?>

    <section class="hero text-centered">
        <h1>D'oh!</h1>
        <p>Page not found</p>
    </section>
    
    <section>
        <p>Sorry, the page you are looking for is not available. It may have moved, or you may have followed a bad link. Please 
    <a href="<?php bloginfo('url') ?>">visit our homepage</a> to find what you're looking for.</p>
    </section>

<?php endif; ?>


<?php get_footer(); ?>
