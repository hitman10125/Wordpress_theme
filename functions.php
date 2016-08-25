<?php 
add_filter('show_admin_bar', '__return_false');

function piny_resources(){

	wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','piny_resources');

//menu

register_nav_menus(array(
'primary' => __('Primary Menu'),
'footer' => __('footer Menu'),
	));
//<?php the_post_thumbnail(); 

//theme setup
function piny_setup(){
	//add featured image
add_theme_support('post-thumbnails');

add_theme_support('post-formats',array('aside','gallery','link'));

}

add_action('after_setup_theme','piny_setup');

//Add our widget locations

function ourWidgetsInit(){

	register_sidebar(array(
		'name'=>'widget',
		'id'=>'widget1'

		));
}

add_action('widgets_init','ourWidgetsInit');
