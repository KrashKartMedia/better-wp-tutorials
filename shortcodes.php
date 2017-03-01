<?php 
if ( ! defined( 'ABSPATH' ) ) {exit;}
//first shortcode. 
//  [better-wp-tuts logged-in-text="Login Here" logged-out-text="Login to Youriste.com " link="/wp-admin"] [better-register register-logged-in-text="Sign Up" logged-out-text=" to login to your WP site."]
function bwptuts_shortcode_one($atts = [], $content = null, $tag = ''){
	$current_user = wp_get_current_user();
	// normalize attribute keys, lowercase
	$atts = array_change_key_case((array)$atts, CASE_LOWER);
	// override default attributes with user attributes
	$bwptuts = shortcode_atts([
	'logged-in-text' => '',
	'link' => '',
	'logged-out-text' => '',
	], $atts, $tag);
	//if logged out
	if ( 0 == $current_user->ID ) {
	$o = '';
	$o .= esc_html__($bwptuts['logged-out-text'], 'better_wp_tutorials') . esc_html__($bwptuts['link'], 'better_wp_tutorials');
	// enclosing tags
	if (!is_null($content)) {
	// secure output by executing the_content filter hook on $content
	$o .= apply_filters('the_content', $content);
	// run shortcode parser recursively
	$o .= do_shortcode($content);
	}
	// return output
	return $o;
	} 
	//if logged in
	else {
	// start output
	$o = '';
	$o .= '<a target="_blank" href="' . esc_url( $current_user->user_url ) . esc_html__($bwptuts['link'], 'better_wp_tutorials') . '">' . esc_html__($bwptuts['logged-in-text'], 'better_wp_tutorials') . '</a>';
	// enclosing tags
	if (!is_null($content)) {
	// secure output by executing the_content filter hook on $content
	$o .= apply_filters('the_content', $content);
	// run shortcode parser recursively
	$o .= do_shortcode($content);
	}
	// return output
	return $o;
	}
}
function bwptuts_shortcode_ones_one_init() {
	add_shortcode('better-wp-tuts', 'bwptuts_shortcode_one');
}
	add_action('init', 'bwptuts_shortcode_ones_one_init');

//second shortcode
// [better-register register-text="Sign Up" other=" to login to your WP site."]
function bwptuts_shortcode_one_two($atts = [], $content = null, $tag = '') {
	$current_user = wp_get_current_user();
	// normalize attribute keys, lowercase
	$atts = array_change_key_case((array)$atts, CASE_LOWER);
	// override default attributes with user attributes
	$bwptuts = shortcode_atts([
	'before-registered-text' => '',
	'register-text' => 'Register',
	'register-url' => '/wp-admin/',
	'other' => '',
	], $atts, $tag);
	//if logged out
	if ( 0 == $current_user->ID ) {
	$o = '';
	$o .= esc_html__($bwptuts['before-registered-text'], 'better_wp_tutorials') . '<a href="' . esc_html__($bwptuts['register-url'], 'better_wp_tutorials') . '">' . esc_html__($bwptuts['register-text'], 'better_wp_tutorials') . '</a>' . esc_html__($bwptuts['other'], 'better_wp_tutorials');
	// enclosing tags
	if (!is_null($content)) {
	// secure output by executing the_content filter hook on $content
	$o .= apply_filters('the_content', $content);
	// run shortcode parser recursively
	$o .= do_shortcode($content);
	}
	// return output
	return $o;
	} 
	//if logged in
	else {
	// start output
	$o = '';
	// enclosing tags
	if (!is_null($content)) {
	// secure output by executing the_content filter hook on $content
	$o .= apply_filters('the_content', $content);
	// run shortcode parser recursively
	$o .= do_shortcode($content);
	}
	// return output
	return $o;
	}
}
function bwptuts_shortcode_one_twos_init() {
	add_shortcode('better-wp-tuts-register', 'bwptuts_shortcode_one_two');
}
	add_action('init', 'bwptuts_shortcode_one_twos_init');
?>