<?php get_header(); ?>
	
	<div class="inner_wrap">
	<h1><?php bloginfo('title'); ?></h1>
	<div id="hwrap">
	<a href="#secondSection" class="local"><h3>Design</h3></a>
	<a href="#secondSection" class="local"><h3>Development</h3></a>
	<a href="#thirdSection" class="local"><h3>Wordpress</h3></a>
	</div><!--  end hwrap  -->
<?php $firstQuery = new WP_Query('category_name=first'); ?>
<?php while($firstQuery->have_posts()): $firstQuery->the_post(); ?>
	<div id="firstSectionContent">
		<?php the_content(); ?>
		<?php edit_post_link(); ?>
	</div>

<?php endwhile; ?>

	<a href="#" class="local"><div role="button" class="button action left">ACTIE 1</div></a>
	<a href="#" class="local"><div role="button" class="button action right">ACTIE 2</div></a>
	</div><!--  end .inner_wrap  --> 
	</section><!--  end firstSection  -->
	<section id="secondSection" class="sections">
	<div class="pointerDowner"></div>
	<div class="inner_wrap">
<?php $secondQuery = new WP_Query('category_name=second'); ?>
<?php while($secondQuery->have_posts()): $secondQuery->the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<div>
		<?php the_content(); ?>
		<?php edit_post_link(); ?>
	</div>
	</div><!--  end .inner_wrap  -->
<?php  endwhile; ?>
	</section><!--  end secondSection  -->
	<section id="thirdSection" class="sections">
	<div class="pointerDowner"></div>
	<div class="inner_wrap">
<?php $thirdQuery = new WP_QUERY('category_name=third'); ?>
<?php while($thirdQuery->have_posts()): $thirdQuery->the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<img src="<?php echo THEMEPATH; ?>/images/wordpress_cutout.png" id="wpStamp" class="left" alt="">
	<article>
		<?php the_content(); ?>
		<?php edit_post_link(); ?>
	</article>
	</div><!--  end .inner_wrap  -->
<?php endwhile; ?>
	</section><!--  end thirdSection  -->
<?php get_footer(); ?>