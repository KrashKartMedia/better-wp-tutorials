<?php
if ( ! defined( 'ABSPATH' ) ) {exit;}
//creates the options page insde of wp-admin dashboard.
  add_action( 'admin_menu', 'wpbwptuts_custom_menu_page' );
  function wpbwptuts_custom_menu_page(){
  	add_options_page( 'Interactive Tutorials', 'Interactive Tuts', 'manage_options', 'interactive-tutorials', 'wp_interactive_tutorials_custom_menu_page');
  }
?>