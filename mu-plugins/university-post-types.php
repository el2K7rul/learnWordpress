<?php
function university_post_types() {
	register_post_type( 'event', array(
        'rewrite' => array('slug'=> 'events'),
        'has_archive'=> true,
		'supports'=> array('title', 'editor', 'excerpt', 'custom-fields'),
		'public' => true,
        'show_in_rest'=> true,
		'menu_icon' => 'dashicons-calendar',
		'description'=>'events calendar of university',
		'labels' => array(
			'name' => 'Events',
            'edit_item'=> 'Edit Event',
			'add_new_item' => 'Add New Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
		)
	) );
	register_post_type( 'campus', array(
        'show_in_rest'=> true,
		'supports'=> array('title', 'editor', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug'=> 'campuses'),
        'has_archive'=> true,
		'public' => true,
		'menu_icon' => 'dashicons-location-alt',
		'labels' => array(
			'name' => 'Campuses',
            'edit_item'=> 'Edit Campus',
			'add_new_item' => 'Add New Campus',
            'all_items' => 'All Campuses',
            'singular_name' => 'Campus'
		)
	) );

	// PROGRAM POST TYPE
	register_post_type( 'program', array(
        'rewrite' => array('slug'=> 'programs'),
        'has_archive'=> true,
		'supports'=> array('title', 'editor', 'custom-fields'),
		'public' => true,
        'show_in_rest'=> true,
		'menu_icon' => 'dashicons-awards',
		'description'=>'events calendar of university',
		'labels' => array(
			'name' => 'Programs',
            'edit_item'=> 'Edit Program',
			'add_new_item' => 'Add New Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
		)
	) );
	// PROFFESOR POST TYPE
	register_post_type( 'professor', array(
        'rewrite' => array('slug'=> 'professors'),
        'has_archive'=> true,
		'supports'=> array('title', 'editor', 'thumbnail'),
		'public' => true,
        'show_in_rest'=> true,
		'menu_icon' => 'dashicons-awards',
		'description'=>'events calendar of university',
		'labels' => array(
			'name' => 'Professors',
            'edit_item'=> 'Edit Professor',
			'add_new_item' => 'Add New Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
		)
	) );
}

add_action( 'init', 'university_post_types' );





?>


