<?php
/**
* Plugin Name: Learning Exchange
* Plugin URI: http://timklapdor.com
* Description: This plugin adds a Custom Post Type & Taxonomies.
* Version: 0.0.1
* Author: Tim Klapdor
* Author URI: http://timklapdor.com
* License: GPL2
*/

/*Adding Exemplar Custom Post Type */

if ( ! function_exists('lx_exemplar') ) {

// Register Custom Post Type
function lx_exemplar() {

	$labels = array(
		'name' => 'Exemplars',
		'singular_name' => 'Exemplar',
		'menu_name' => 'Exemplars',
		'name_admin_bar' => 'Exemplars',
		'archives' => __( 'Exemplar Archives', 'text_domain' ),
		'parent_item_colon' => __( 'Parent Exemplars:', 'text_domain' ),
		'all_items' => __( 'All Exemplars', 'text_domain' ),
		'add_new_item' => __( 'Add New Exemplar', 'text_domain' ),
		'add_new' => __( 'Add New Exemplar', 'text_domain' ),
		'new_item' => __( 'New Exemplar', 'text_domain' ),
		'edit_item' => __( 'Edit Exemplar', 'text_domain' ),
		'update_item' => __( 'Update Exemplar', 'text_domain' ),
		'view_item' => __( 'View Exemplar', 'text_domain' ),
		'search_items' => __( 'Search Exemplars', 'text_domain' ),
		'not_found' => __( 'No examplars found', 'text_domain' ),
		'not_found_in_trash' => __( 'No exemplars in Trash', 'text_domain' ),
		'featured_image' => __( 'Featured Image', 'text_domain' ),
		'set_featured_image' => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image' => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item' => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list' => __( 'Exemplar list', 'text_domain' ),
		'items_list_navigation' => __( 'Exemplar list navigation', 'text_domain' ),
		'filter_items_list' => __( 'Filter Exemplar list', 'text_domain' ),
	);
	$args = array(
		'label' => __( 'Exemplar', 'text_domain' ),
		'description' => __( 'Exemplar posts are used to develop a Learning Exchange', 'text_domain' ),
		'labels' => $labels,
		'supports' => array( 'title', 'thumbnail', ),
		'taxonomies' => array( 'post_tag', ),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
        'menu_icon' => 'dashicons-align-center',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,		
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'exemplar', $args );

}
add_action( 'init', 'lx_exemplar', 0 );

}

// Register Custom Taxonomies
function lx_taxonomies() {

    
// Technologies 

register_taxonomy( 'technology', 'exemplar', array(
        'label' => 'Technology',
        'hierarchical' => false));    
    
//Disciplines
    
register_taxonomy( 'discipline', 'exemplar', array(
        'label' => 'Discipline',
        'hierarchical' => true));

// Register Schools

register_taxonomy( 'school', 'exemplar', array(
        'label' => 'School',
        'hierarchical' => true));

// Register Exemplar Type

register_taxonomy( 'exemplar_types', 'exemplar', array(
        'label' => 'Types',
        'hierarchical' => true));

// Register Collection
    
register_taxonomy( 'collections', 'exemplar',  array(
        'label' => 'Collections',
        'hierarchical' => true));
}

add_action('init', 'lx_taxonomies');

/* Stop Adding Functions Below this Line */
?>