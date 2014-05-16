<?php get_header(); ?>

			<div id="content">
			
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/packages.png" alt="Sprouting Fit" class="claire"/>

				<?php if ( have_posts() ) while ( have_posts() )
					{
						the_post();
						the_content(); 
					} 
				?>
			
			</div>
			
<?php require('footer.php'); ?>