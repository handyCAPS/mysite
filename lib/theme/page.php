<?php get_header(); ?>

<section id="pageSection" class="sections">
	<div class="inner_wrap">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div>
		<?php the_content(); ?>
		<?php edit_post_link(); ?>
	</div>
	</div><!--  end .inner_wrap  -->
<?php endwhile; ?>
<?php endif; ?>
	</section><!--  end pageSection  -->

<?php get_footer(); ?>