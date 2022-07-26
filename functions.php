<?php 

add_action( 'wp_enqueue_scripts', function() {
    
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css' );


    wp_enqueue_script('script', get_template_directory_uri() . '/assets/script.js' );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter('use_block_editor_for_post', '__return_false', 10);


add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);




?>