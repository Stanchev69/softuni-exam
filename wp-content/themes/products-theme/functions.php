<?php


/** Register the esential theme setup */
function theme_setup(){

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );


}
add_action('after_setup_theme','theme_setup');

/** Register the styles */
function enqueue_my_styles() {
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/css/master.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_my_styles' );

/** Register the navigation menu **/
function register_my_nav_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}

add_action( 'init', 'register_my_nav_menu' );

