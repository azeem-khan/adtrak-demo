<?php 


/* ========================================================================================================================

Register Kitchens CPT

======================================================================================================================== */
function register_kitchens() {

	$labels = array(
		'name'                  => _x( 'Kitchens', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Kitchen', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Kitchens', 'text_domain' ),
		'name_admin_bar'        => __( 'Kitchens', 'text_domain' ),
		'archives'              => __( 'Kitchen Archives', 'text_domain' ),
		'attributes'            => __( 'Kitchen Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Kitchen:', 'text_domain' ),
		'all_items'             => __( 'All Kitchens', 'text_domain' ),
		'add_new_item'          => __( 'Add New Location', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Kitchen', 'text_domain' ),
		'edit_item'             => __( 'Edit Kitchen', 'text_domain' ),
		'update_item'           => __( 'Update Kitchen', 'text_domain' ),
		'view_item'             => __( 'View Kitchen', 'text_domain' ),
		'view_items'            => __( 'View Kitchens', 'text_domain' ),
		'search_items'          => __( 'Search Kitchen', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Kitchen Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set kitchen image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove kitchen image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as kitchen image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into kitchen', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this kitchen', 'text_domain' ),
		'items_list'            => __( 'Kitchens list', 'text_domain' ),
		'items_list_navigation' => __( 'Kitchens list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Kitchens list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'kitchens',
		'with_front'            => false,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Kitchen', 'text_domain' ),
		'description'           => __( 'Kitchens CPT', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-food',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'kitchens', $args );

}
add_action( 'init', 'register_kitchens', 0 );



/* ========================================================================================================================

Register Resources CPT

======================================================================================================================== */
// function register_assets() {

// 	$labels = array(
// 		'name'                  => _x( 'Resources', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'             => __( 'Resources', 'text_domain' ),
// 		'name_admin_bar'        => __( 'Resources', 'text_domain' ),
// 		'archives'              => __( 'Resource Archives', 'text_domain' ),
// 		'attributes'            => __( 'Resource Attributes', 'text_domain' ),
// 		'parent_item_colon'     => __( 'Parent Resource:', 'text_domain' ),
// 		'all_items'             => __( 'All Resources', 'text_domain' ),
// 		'add_new_item'          => __( 'Add New Resource', 'text_domain' ),
// 		'add_new'               => __( 'Add Resource', 'text_domain' ),
// 		'new_item'              => __( 'New Resource', 'text_domain' ),
// 		'edit_item'             => __( 'Edit Resource', 'text_domain' ),
// 		'update_item'           => __( 'Update Resource', 'text_domain' ),
// 		'view_item'             => __( 'View Resource', 'text_domain' ),
// 		'view_items'            => __( 'View Resources', 'text_domain' ),
// 		'search_items'          => __( 'Search Resource', 'text_domain' ),
// 		'not_found'             => __( 'Not found', 'text_domain' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
// 		'featured_image'        => __( 'Resource Image', 'text_domain' ),
// 		'set_featured_image'    => __( 'Set resource image', 'text_domain' ),
// 		'remove_featured_image' => __( 'Remove resource image', 'text_domain' ),
// 		'use_featured_image'    => __( 'Use as resource image', 'text_domain' ),
// 		'insert_into_item'      => __( 'Insert into resource', 'text_domain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this resource', 'text_domain' ),
// 		'items_list'            => __( 'Resource list', 'text_domain' ),
// 		'items_list_navigation' => __( 'Resource list navigation', 'text_domain' ),
// 		'filter_items_list'     => __( 'Filter resources list', 'text_domain' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Resource', 'text_domain' ),
// 		'description'           => __( 'Resources CPT', 'text_domain' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'thumbnail' ),
// 		'taxonomies'            => array( 'resource-categories' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-index-card',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'post',
// 	);
// 	register_post_type( 'resources', $args );

// }
// add_action( 'init', 'register_assets', 0 );

?>
