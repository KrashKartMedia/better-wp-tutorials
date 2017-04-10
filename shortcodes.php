<?php 
if ( ! defined( 'ABSPATH' ) ) {exit;}
//first shortcode. 
//  [interactive_tuts logged-in-text="Login Here" logged-out-text="Login to Youriste.com " link="/wp-admin"] [better-register register-logged-in-text="Sign Up" logged-out-text=" to login to your WP site."]
function interactive_tuts_shortcode_one($atts = [], $content = null, $tag = ''){
	$current_user = wp_get_current_user();
	$your_site_url = esc_attr(get_option( 'your_site_url' )); 
	// normalize attribute keys, lowercase
	$atts = array_change_key_case((array)$atts, CASE_LOWER);
	// override default attributes with user attributes
	$interactive_tuts = shortcode_atts([
	'logged-in-text' => '',
	'link' => '',
	'logged-out-text' => $your_site_url,
	], $atts, $tag);
	//if logged out
	if ( 0 == $current_user->ID ) {
	$o = '';
	$o .= esc_html__($interactive_tuts['logged-out-text'], 'wp_interactive_tutorials') . esc_html__($interactive_tuts['link'], 'wp_interactive_tutorials');
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
	$o .= '<a target="_blank" href="' . esc_url( $current_user->user_url ) . esc_html__($interactive_tuts['link'], 'wp_interactive_tutorials') . '">' . esc_html__($interactive_tuts['logged-in-text'], 'wp_interactive_tutorials') . '</a>';
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
function interactive_tuts_shortcode_ones_one_init() {
	add_shortcode('interactive_tuts', 'interactive_tuts_shortcode_one');
}
	add_action('init', 'interactive_tuts_shortcode_ones_one_init');

//second shortcode
// [better-register register-text="Sign Up" other=" to login to your WP site."]
function interactive_tuts_shortcode_one_two($atts = [], $content = null, $tag = '') {
	$current_user = wp_get_current_user();
	// normalize attribute keys, lowercase
	$atts = array_change_key_case((array)$atts, CASE_LOWER);
	// override default attributes with user attributes
	$interactive_tuts = shortcode_atts([
	'before-registered-text' => '',
	'register-text' => 'Register',
	'register-url' => '/wp-admin/',
	'other' => '',
	], $atts, $tag);
	//if logged out
	if ( 0 == $current_user->ID ) {
	$o = '';
	$o .= esc_html__($interactive_tuts['before-registered-text'], 'wp_interactive_tutorials') . '<a href="' . esc_html__($interactive_tuts['register-url'], 'wp_interactive_tutorials') . '">' . esc_html__($interactive_tuts['register-text'], 'wp_interactive_tutorials') . '</a>' . esc_html__($interactive_tuts['other'], 'wp_interactive_tutorials');
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
function interactive_tuts_shortcode_one_twos_init() {
	add_shortcode('interactive_tuts-register', 'interactive_tuts_shortcode_one_two');
}
	add_action('init', 'interactive_tuts_shortcode_one_twos_init');
?>