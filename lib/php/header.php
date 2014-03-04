<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		<?php 
			if(is_home()) {
				bloginfo('title');
				echo ' | Home'; 
			} else {
				wp_title('|', true, 'right');
				bloginfo('title');
			}
		 ?>
	</title>
	
	<link href='http://fonts.googleapis.com/css?family=Average' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="outerWrap">
	<header>
	<div id="navWrap">
		<?php 
		   /**
			* Displays a navigation menu
			* @param array $args Arguments
			*/
			$args = array(
				'theme_location' => 'header_menu',
				'menu' => 'Custom Header Menu',
				'container' => 'nav',
				'container_class' => 'menu-{menu-slug}-container',
				'container_id' => '',
				'menu_class' => 'menu',
				'menu_id' => '',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
				'depth' => 0,
				'walker' => ''
			);
		
			wp_nav_menu( $args );
		 ?>
		<i class="icon-reorder" id="toggleMenu"></i>
	</div><!--  end navWrap  -->
	</header>
	<section id="firstSection" class="sections">
	