<!DOCTYPE html>

<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">

	<head>
	
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
		<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?> | <?php single_post_title(); ?></title>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
		
		<!--[if IE]>
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styleIE.css" type="text/css" />
		<![endif]-->
		
		<?php wp_head(); ?>
		
	</head>
	
	<body>
	
		<div id="wrapper">
	
			<div id="header">
				
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="sprouting fit logo" /></a>
				
			</div>
			
			<div id="contact">
			
				<p>Aaron Chambers, Personal Trainer<br />
				<span class="contactIcons">p:</span> 0404362410 <span class="contactIcons">e:</span> <a href="mailto:aaron@sproutingfit.com.au">aaron@sproutingfit.com.au</a></p>
				
			</div>
			
			<div id="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				
			</div>