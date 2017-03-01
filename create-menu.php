<?php
if ( ! defined( 'ABSPATH' ) ) {exit;}
//creates the options page insde of wp-admin dashboard.
  add_action( 'admin_menu', 'wpbwptuts_custom_menu_page' );
  function wpbwptuts_custom_menu_page(){
  	add_options_page( 'Better Wp Tutorials', 'Better WP Tuts', 'manage_options', 'better-wp-tutorials', 'better_wp_tutorials_custom_menu_page');
  }
?>