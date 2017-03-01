<?php
if ( ! defined( 'ABSPATH' ) ) {exit;}
function better_wp_tutorials_custom_menu_page(){
    //start wrap
    	echo '<div class="wrap">';
        echo '<h2>Better WP Tutorials</h2>';
        ?>
        <div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">

				<!-- main content -->
				<div id="post-body-content">
					<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
								<?php echo __( 'Shortcodes', 'better_wp_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
								<table class="widefat" cellspacing="0">
									<tbody>
									<tr class="alternate">
										<td class="row-title">
										<?php echo __( 'Register Shortcode: ', 'better_wp_tutorials' ); ?> 			
										<?php echo '[better-wp-tuts-register before-registered-text="" register-text="" register-url="" other=""]';?>
										</td>
									</tr>
									<tr>
										<td class="row-title">
										<?php echo __( 'Better WP Tutorials Shortcode: ', 'better_wp_tutorials' ); ?> 						<?php echo '[better-wp-tuts logged-in-text="" link="" logged-out-text=""]';?>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
							<!-- .inside -->
						</div>
						<!-- .postbox -->
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'Registered Shortcode Parameters Defined', 'better_wp_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
								<p>
										<?php echo '<code>before-registered-text=""</code>'; ?> 			
										<?php echo __( 'The text displayed before the register text and url.', 'better_wp_tutorials' );?>
								</p>
								<p>
										<?php echo '<code>register-text=""</code>'; ?> 			
										<?php echo __( 'The text used in the link, between the opening and closing < a> tags. Default text: Register', 'better_wp_tutorials' );?>
								</p>
								<p>
										<?php echo '<code>register-url=""</code>'; ?> 			
										<?php echo __( 'The link to the WP Dashboard. Link /wp-admin/, /wp-login.php/ or /your-login-url/. Default URL: /wp-admin/', 'better_wp_tutorials' );?>
								</p>
								<p>
										<?php echo '<code>other=""</code>'; ?> 			
										<?php echo __( 'The text displayed after the register text and url.', 'better_wp_tutorials' );?>
								</p>
								<p>
										<?php echo '<b>Example</b>: <br>' . '<code>[better-wp-tuts-register before-registered-text="Create a free profile on our site to link directly to your site. " register-text="Sign Up" register-url="/login" other=" for free."]</code>'; ?>
								</p>

								<p>
							</div>
							<!-- .inside -->
						</div>
						<!-- .postbox -->
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'Better WP Tutorials Shortcode Parameters Defined', 'better_wp_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
										<?php echo '<code>logged-in-text=""</code>'; ?> 			
										<?php echo __( 'The text displayed to the user, when logged in, between the opening and closing < a> tags. ', 'better_wp_tutorials' );?>
								</p>
								<p>
										<?php echo '<code>link=""</code>'; ?> 			
										<?php echo __( 'The link you want your users to visit. Use /wp-admin/ to link inside the WordPress Dashboard.', 'better_wp_tutorials' );?>
								</p>
								<p>
										<?php echo '<code>logged-out-text=""</code>'; ?> 			
										<?php echo __( 'The text output before the link. Like Yoursite.com.', 'better_wp_tutorials' );?>
								</p>
								<p>
										<?php echo '<b>Example</b>: <br>' . '<code>[better-wp-tuts logged-in-text="Install Query All The Post Types" logged-out-text="Visit Youriste.com " link="/wp-admin/plugin-install.php?s=query+all+the+post+types&tab=search&type=term"]</code>'; ?>
								</p>
							</div>
							<!-- .inside -->
						</div>
						<!-- .postbox -->
						<!-- .postbox -->
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'Example Dummy Text', 'better_wp_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
							<p>
							<h3><?php echo __( 'To Use Dummy Text:', 'better_wp_tutorials' ); ?></h3>
								<ol>
									<li>
										<?php echo __( 'Create a new page or post. Perferrably a test page hidden from the public, or on a staging site.', 'better_wp_tutorials' ); ?>
									</li>
									<li>
										<?php echo __( 'Copy and Paste Dummy Text.', 'better_wp_tutorials' ); ?>
									</li>
									<li>
										<?php echo __( 'Publish post or page.', 'better_wp_tutorials' ); ?>
									</li>
									<li>
										<?php echo __( 'View the post or page as a logged in user. Page should link to the site you defined in your user profile, followed by the link url you defined in the shortcode.', 'better_wp_tutorials' ); ?>
									</li>
									<li>
										<?php echo __( 'Log out of the site. View the post or page. Should only show the Register link, and your logged out text followed by the link you defined in the shortcode. ', 'better_wp_tutorials' ); ?>
									</li>
								</ol>
							</p>
							<p>
							<h3><?php echo __( 'Dummy Text', 'better_wp_tutorials' ); ?></h3>
							Lets Get Started. <br>[better-wp-tuts-register before-registered-text="Create a free profile on our site to link directly to your site. " register-text="Sign Up" register-url="/login" other=" for free."]
<ol>
<li> [better-wp-tuts logged-in-text="Login Here" link="/wp-admin" logged-out-text="Login to Youriste.com "]</li>
<li>[better-wp-tuts logged-in-text="Install Query All The Post Types" logged-out-text="Visit Youriste.com " link="/wp-admin/plugin-install.php?s=query+all+the+post+types&tab=search&type=term"]. Click on Install & Activate button.</li>
<li>[better-wp-tuts logged-in-text="Visit Settings Page" logged-out-text="Visit Youriste.com " link="/wp-admin/options-general.php?page=query_all_the_post_types" message=" to see the settings page."]</li>
</ol></p>
							</div>
							<!-- .inside -->
						</div>
						<!-- .postbox -->
					</div>
					<!-- .meta-box-sortables .ui-sortable -->
				</div>
				<!-- post-body-content -->

				<!-- sidebar -->
				<div id="postbox-container-1" class="postbox-container">
					<div class="meta-box-sortables">
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'About The Plugin', 'better_wp_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
							<p>
							<?php echo __( 'Better WP Tutorials is a plugin that helps your site link directly to a users WordPress website, with the help of shortcodes. A user registers for a free account on your site. The user enters in their website url into the standard WordPress user profile. Every time a user views one of your tutorials, using these shortcodes, the user will be linked directly to their site. ', 'better_wp_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'Version', 'better_wp_tutorials' ) . ' 0.0.1' ; ?>
							</p>
							</div>
						</div>
						<!-- .postbox -->
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'Some Other Details', 'better_wp_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
							<p>
							<?php echo __( 'You need to use another plugin allowing your WordPress site to allow anyone to register as a subscriber, or use a plugin allowing users to create a free account and edit their profile on the front end of your site.', 'better_wp_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'Once you set up a tutorial, you shouldnt have to edit it again, unless the urls change. Sometimes a plugin autor might change the url to a settings page or options tabs.', 'better_wp_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'If a user is not logged in, the output is a little ugly. Its designed to intrigue users to create a free profile to see sexy links and link directly to their site.', 'better_wp_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'This plugin does not work with MultiSite, yet', 'better_wp_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'Version', 'better_wp_tutorials' ) . ' 0.0.1' ; ?>
							</p>
							</div>
						</div>
						<!-- .postbox -->
					</div>
					<!-- .meta-box-sortables -->
				</div>
				<!-- #postbox-container-1 .postbox-container -->
			</div>
			<br class="clear">
		</div>
        <?php
        echo '</div>';
}
?>