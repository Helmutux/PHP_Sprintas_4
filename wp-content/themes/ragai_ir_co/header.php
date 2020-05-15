<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); wp_title(); ?></title>
<?php wp_head(); ?>
</head>

<body>
<div class="main">
	<div class="head">
		<h2>Išsirinki savo <br />Ragus!</h2>
		<a href="<?php echo home_url(); ?>"><span>C</span>hoose <span>H</span>orns!</a>
	</div>
	
	<div class="content-main">
		<?php wp_nav_menu(array('theme_location'=>'menu', 'container'=>'false')); ?>
		<form class="search-main" action="<?php echo home_url('/'); ?>" method="">
			<input class="serch-txt" type="text" name="s" />
			<input class="serch-btn" type="image" src="<?php bloginfo('template_url'); ?>/images/search-btn.jpg" />
		</form>

		<?php $slider= new WP_Query(array('post_type'=>'slider', 'posts_per_page' => -1, 'order'=>'ASC'));  ?>
		<?php if ($slider->have_posts() ) : ?>
			<div id="slider">
				<ul id="cycle">
		<?php while ($slider->have_posts() ) : $slider->the_post(); ?>
					<li><?php the_post_thumbnail('full'	) ?></li>
		<?php endwhile; ?>
				</ul>
			<div id="cyclePager"></div>
		<?php else: ?>
			<p>Vieta skaidrėms</p>
		<?php endif; ?>

		<?php wp_reset_query(); ?>
	</div>  