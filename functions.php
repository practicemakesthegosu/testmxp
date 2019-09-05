<?php
add_action( 'wp_enqueue_scripts', 'mxp_enqueue_parent_styles' );
function mxp_enqueue_parent_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
  
function mxp_adding_scripts() {
  wp_register_script('my_amazing_script', get_stylesheet_directory_uri() . '/script.js', array('jquery'),'1.1', true);
  wp_enqueue_script('my_amazing_script');
}
    
add_action( 'wp_enqueue_scripts', 'mxp_adding_scripts' ); 


function mxp_custom_mime_types( $mimes ) {
  // New allowed mime types.
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  $mimes['doc'] = 'application/msword';  
  // Optional. Remove a mime type.
  unset( $mimes['exe'] ); 
  return $mimes;
}

add_filter( 'upload_mimes', 'mxp_custom_mime_types' );
?>