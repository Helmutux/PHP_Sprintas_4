<?php
/**
 * visi projekte naudojami stiliai ir scriptai
**/
function load_style_script(){
    wp_enqueue_script('jquery-1', get_template_directory_uri() . '/js/jquery-1.js');
    wp_enqueue_script('jquery00', get_template_directory_uri() . '/js/jquery00.js');
    wp_enqueue_script('init0000', get_template_directory_uri() . '/js/init0000.js');
    wp_enqueue_style('style',  get_template_directory_uri() . '/style.css');
}

 /**
 * uzkrauname stilius ir scriptus
 **/
add_action('wp_enqueue_scripts', 'load_style_script');

 /**
 * paveiksleliu palaikymas
 **/
add_theme_support('post-thumbnails');

 /**
 * meniu
 **/
register_nav_menu('menu', 'Meniu');

/**
 * widget palaikymas sidebar zonoje
 **/
register_sidebar(array(
    'name'=>'Sidebar widgets',
    'id'=>'sidebar',
    'description'=>'Place for sidebar widgets',
    'before_widget'=>'<div class="widget">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>'
));

/**
 * vidget palaikymas footer zonoje
 **/
register_sidebar(array(
    'name'=>'Footers widgets',
    'id'=>'footer',
    'description'=>'Place for footer widgets',
    'before_widget'=>'<div class="menu-foot">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>'
));

/**
* sliders (skaidriu rodymas)
**/
add_action('init', 'slider');

function slider(){
	register_post_type('slider', array(
		'public' => true,
		'supports' => array('title', 'thumbnail'),
		'labels' => array(
			'name' => 'Skaidrė',
			'all_items' => 'Visos skaidrės',
			'add_new' => 'Pridėti naują',
			'add_new_item' => 'Skaidrės pridėjimas'
		)
	));
}
?>