<?php
/*
 * This is the child theme for OceanWP theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'ocean_child_enqueue_styles' );
function ocean_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/*
 * Your code goes below
 */

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/
// Create 1 Custom Post type for a Demo, called events-category
function post_type_cloths(){
	
	$singular = 'cloth';
	$plural = 'cloths';


$labels = array(
	'name' 					=> $plural,
	'singular_name' 		=> $singular,
	'add_name' 				=> 'Add New'. $singular,
	'add_new_item'			=> 'Add New' . $singular,
	'edit' 					=> 'Edit'. $singular,
	'edit_item'				=> 'Edit' . $singular,
    'view' 					=> 'view'. $singular,
	'view_item' 			=> 'View' . $singular,	
	'search_term' 			=> 'Search' . $plural,
	'parent' 				=> 'Parent' . $singular,
	'not_found' 			=> 'No' . $plural .'found',
	'not_found_in_trash'	=> 'No' . $plural .'found in trash',

);


$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cloths' ),
		'menu_icon'          => 'dashicons-products',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title',  'thumbnail' , 'editor', 'excerpt' )
	);

register_post_type('cloths-post', $args);


}

add_action('init','post_type_cloths');


//Category

function register_taxonomy_cloths_category(){

	$singular = 'cloth Category';
	$plural = 'cloths Category ';


$labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);


 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'cloths-category' ),
	);

register_taxonomy( 'cloths-category', 'cloths-post', $args );
}

add_action('init','register_taxonomy_cloths_category');


//Tag

function register_taxonomy_notices_tag(){

	$singular = 'cloth Tag';
	$plural = 'cloths Tag';


$labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remaove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);


 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'cloths-tag' ),
	);

register_taxonomy( 'cloths-tag', 'cloths-post', $args );
}

add_action('init','register_taxonomy_cloths_tag');