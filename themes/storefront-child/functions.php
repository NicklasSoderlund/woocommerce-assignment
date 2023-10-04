<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'parenthandle' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}

function post_type_store()
{
$supports = array(
'title', 
'editor',
'thumbnail',
'excerpt',
'custom-fields',
'comments',
'revisions',
'post-formats',
);
 
$labels = array(
'name' => _x('Stores', 'plural'),
'singular_name' => _x('Store', 'singular'),
'menu_name' => _x('Stores', 'admin menu'),
'name_admin_bar' => _x('News', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Store'),
'new_item' => __('New store'),
'edit_item' => __('Edit store'),
'view_item' => __('View store'),
'all_items' => __('All stores'),
'search_items' => __('Search stores'),
'not_found' => __('No stores found.'),
);
 
$args = array(
'supports' => $supports, // Vilka "content" delar som ska användas i post-typen
'labels' => $labels, // Namn och text som syns i UI:t
'public' => true, // Om alla användare ska kunna skapa denna post-types
'query_var' => true, // Skapa en query-variabel för post-typen
'rewrite' => array('slug' => 'store'), // Hur man når post-typen (t.ex. som inläggsida) http://localhost/news/
'has_archive' => false, // Ska post-typen ha arkiv-sida? Likt inlägg
'hierarchical' => false, // Ska de behandlas som sidor (true) eller inlägg (false)?
);
 
register_post_type('store', $args);
}
 
add_action('init', 'post_type_store');