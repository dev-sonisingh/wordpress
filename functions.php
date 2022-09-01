<?php


function tm_theme_support(){
    add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','tm_theme_support');

function tm_menus(){
	$location =  array(
	'primary' => 'primary menu',
	'secondory' => 'secondary menu'
	);
	register_nav_menus($location);
}
add_action('init','tm_menus');


function load_stylesheets(){    
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
    
}

add_action('wp_enqueue_scripts','load_stylesheets');
 
function load_scriptss()
{

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-2.1.4.js', array(), '2.1.4' ,true);
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1, 1, 1);
    wp_enqueue_script('bootstrap');
    wp_register_script('mapapi', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI', array(), 1, 1, 1);
    wp_enqueue_script('mapapi');
    wp_register_script('gmap', get_template_directory_uri() . '/assets/js/gmap.js', array(), 1, 1, 1);
    wp_enqueue_script('gmap');
    wp_register_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue_script('owl');
    wp_register_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery-ui');
    wp_register_script('menuzord', get_template_directory_uri() . '/assets/js/menuzord.js', array(), 1, 1, 1);
    wp_enqueue_script('menuzord');
    wp_register_script('tools', get_template_directory_uri() . '/assets/vendor/revolution/jquery.themepunch.tools.min.js', array(), 1, 1, 1);
    wp_enqueue_script('tools');
    wp_register_script('themepunch', get_template_directory_uri() . '/assets/vendor/revolution/jquery.themepunch.revolution.min.js', array(), 1, 1, 1);
    wp_enqueue_script('themepunch');
    wp_register_script('slideanims', get_template_directory_uri() . '/assets/vendor/revolution/revolution.extension.slideanims.min.js', array(), 1, 1, 1);
    wp_enqueue_script('slideanims');
    wp_register_script('layeranimation', get_template_directory_uri() . '/assets/vendor/revolution/revolution.extension.layeranimation.min.js', array(), 1, 1, 1);
    wp_enqueue_script('layeranimation');
    wp_register_script('navigation', get_template_directory_uri() . '/assets/vendor/revolution/revolution.extension.navigation.min.js', array(), 1, 1, 1);
    wp_enqueue_script('navigation');
    wp_register_script('kenburn', get_template_directory_uri() . '/assets/vendor/revolution/revolution.extension.kenburn.min.js', array(), 1, 1, 1);
    wp_enqueue_script('kenburn');
    wp_register_script('actions', get_template_directory_uri() . '/assets/vendor/revolution/revolution.extension.actions.min.js', array(), 1, 1, 1);
    wp_enqueue_script('actions');
    wp_register_script('parallax', get_template_directory_uri() . '/assets/vendor/revolution/revolution.extension.parallax.min.js', array(), 1, 1, 1);
    wp_enqueue_script('parallax');
    wp_register_script('migration', get_template_directory_uri() . '/assets/vendor/revolution/revolution.extension.migration.min.js', array(), 1, 1, 1);
    wp_enqueue_script('migration');
    wp_register_script('switcher', get_template_directory_uri() . '/assets/js/jquery.polyglot.language.switcher.js', array(), 1, 1, 1);
    wp_enqueue_script('switcher');
    wp_register_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js', array(), 1, 1, 1);
    wp_enqueue_script('fancybox');
    wp_register_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), 1, 1, 1);
    wp_enqueue_script('appear');
    wp_register_script('countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', array(), 1, 1, 1);
    wp_enqueue_script('countTo');
    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1, 1, 1);
    wp_enqueue_script('wow');
    wp_register_script('SmoothScroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array(), 1, 1, 1);
    wp_enqueue_script('SmoothScroll');
    wp_register_script('bootstrap-select', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap-select');
    wp_register_script('mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.min.js', array(), 1, 1, 1);
    wp_enqueue_script('mixitup');
    wp_register_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array(), 1, 1, 1);
    wp_enqueue_script('theme');
    wp_register_script('google-map', get_template_directory_uri() . '/assets/js/google-map.js', array(), 1, 1, 1);
    wp_enqueue_script('google-map');
    wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
    

}
add_action('wp_enqueue_scripts','load_scriptss');