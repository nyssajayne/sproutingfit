<?php get_header(); ?>

			<div id="content">
			
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/aboutUs.png" alt="Sprouting Fit" class="claire"/>
				
				<div class="left">
				
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/contactUs.png" alt="Aaron Chambers" class="claire"/>
					
				</div>
				
				<div class="right">

					<?php if ( have_posts() ) while ( have_posts() )
						{
							the_post();
							the_content(); 
						} 
					?>
					
				</div>
			
			</div>
			
<?php require('footer.php'); ?>