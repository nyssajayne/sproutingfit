<?php get_header(); ?>

				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>
			
			</div>
			
<?php require('footer.php'); ?>