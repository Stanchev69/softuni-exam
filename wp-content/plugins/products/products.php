<?php
/*
 * Plugin Name: Products Plugin
 */

 function register_my_products_post_type() {

    $labels = array(
		'name'                  => _x( 'Products', 'Post type general name', 'products' ),
		'singular_name'         => _x( 'Product', 'Post type singular name', 'products' ),
		'menu_name'             => _x( 'Products', 'Admin Menu text', 'products' ),
		'name_admin_bar'        => _x( 'Product', 'Add New on Toolbar', 'products' ),
    );

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'product', $args );
}

add_action( 'init', 'register_my_products_post_type' );

function register_my_custom_category() {

    $labels = array(
		'name'              => _x( 'Brands', 'taxonomy general name', 'products' ),
		'singular_name'     => _x( 'Brand', 'taxonomy singular name', 'products' ),
		'search_items'      => __( 'Search Brands', 'products' ),
		'all_items'         => __( 'All Brands', 'products' ),
		'parent_item'       => __( 'Parent Brand', 'products' ),
		'parent_item_colon' => __( 'Parent Brand:', 'products' ),
		'edit_item'         => __( 'Edit Brand', 'products' ),
		'update_item'       => __( 'Update Brand', 'products' ),
		'add_new_item'      => __( 'Add New Brand', 'products' ),
		'new_item_name'     => __( 'New Brand Name', 'products' ),
		'menu_name'         => __( 'Brand', 'products' ),
	);

    register_taxonomy( 'brand', 'product', array(
        'rewrite' => array( 'slug' => 'product/brand' ),
        'labels'            => $labels,
    ) );
}

add_action( 'init', 'register_my_custom_category', 0 );

/** Get the visits of the post */
function get_posts_visit( $post_id ) {

    $total_visits = 0;
    $current_count = get_post_meta( $post_id, 'total_visits', true );
    if( empty( $current_count ) ) {
        $total_vists = 0;
    } else {
        $total_vists = $current_count + 1;        
    }
    
    update_post_meta( $post_id, 'total_visits', $total_visits );

    return $total_visits;
    
}

/** Change all titles of products */
function change_all_titles( $title) {
    if( is_singular( 'product' ) ) {
        return 'Product: '. $title;
    }
}

add_filter( 'the_title', 'change_all_titles' );