<?php

function uniero_config(){
// Adicionando suporte ao tema
	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
}
add_theme_support( 'custom-header', $args );
add_theme_support( 'post-thumbnails' );

// register custom post type 'my_custom_post_type' with 'supports' parameter
add_action( 'init', 'create_my_post_type' );
function create_my_post_type() {
    register_post_type( 'Tecnologia',
      array(
        'labels' => array( 'name' => __( 'Tecnologia' ) ),
        'public' => true,
        'supports' => array('title', 'editor', 'post-formats', 'thumbnail')
    )

  );
    register_post_type( 'Videos',
      array(
        'labels' => array( 'name' => __( 'Videos' ) ),
        'public' => true,
        'supports' => array('title', 'editor', 'post-formats', 'thumbnail')
    )
  );
     register_post_type( 'Imprensa',
      array(
        'labels' => array( 'name' => __( 'Imprensa' ) ),
        'public' => true,
        'supports' => array('title', 'editor', 'post-formats', 'thumbnail')
    )
  );
}

add_theme_support( 'post-formats', array( 'video', 'image' ) );

function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );;
