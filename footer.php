<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
* Footer
*/
global $lumos_options;
$lumos_options = lumos_get_options();
?>

<section class="contact">
		<div class="container-fluid">

			<div class="row align-items-center">
				<div class="f-cols col-lg-4 hidden-md-down">
					<a id="rancho-box" class="hover-box" href="<?php echo home_url('/locations/'); ?>">
						<div class="location-img">
							<div class="box-title">
								<div class="aligner d-flex align-items-center">
								<h4 class="w-100 text-center">Rancho Mirage</h4>
								</div>
							</div><!-- box-title -->
							<img class="img-fluid w-100 d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/contact/loc-rancho.jpg" alt="Rancho Mirage | Dr. Q Plastic Surgery" />
						</div><!-- location-img -->
						<div class="map-img">
							<img class="img-fluid w-100 d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/contact/loc-rancho-map.jpg" alt="Map" />
						</div><!-- location-img -->
					</a>
				</div><!-- col -->

				<div class="f-cols col-lg-4">
					<div class="contact-info">
						<h3 class="text-center">Locations</h3>
						<p class="text-center"><a id="rancho" href="<?php echo home_url('/locations/'); ?>">Rancho Mirage</a> | <a id="bevhills" href="<?php echo home_url('/locations/'); ?>">Beverly Hills</a></p>

						<?php // First let's check if any of this was set

						echo '<ul class="social-icons text-center d-block py-4">';
						if (!empty($lumos_options['facebook_uid'])) echo '<li><a target="_blank" class="icon-facebook" href="' . $lumos_options['facebook_uid'] . '">'.'</a></li>';
						if (!empty($lumos_options['twitter_uid'])) echo '<li><a target="_blank" class="icon-twitter" href="' . $lumos_options['twitter_uid'] . '">'.'</a></li>';
						if (!empty($lumos_options['google_plus_uid'])) echo '<li><a target="_blank" class="icon-google-plus" href="' . $lumos_options['google_plus_uid'] . '">'.'</a></li>';
						if (!empty($lumos_options['youtube_uid'])) echo '<li><a target="_blank" class="icon-youtube" href="' . $lumos_options['youtube_uid'] . '">'.'</a></li>';
						if (!empty($lumos_options['linkedin_uid'])) echo '<li><a target="_blank" class="icon-linkedin" href="' . $lumos_options['linkedin_uid'] . '">'.'</a></li>';
						if (!empty($lumos_options['yelp_uid'])) echo '<li><a target="_blank" class="icon-yelp" href="' . $lumos_options['yelp_uid'] . '">'.'</a></li>';
						if (!empty($lumos_options['blogger_uid'])) echo '<li><a target="_blank" class="icon-blogger" href="' . $lumos_options['blogger_uid'] . '">'.'</a></li>';
						if (!empty($lumos_options['instagram_uid'])) echo '<li><a target="_blank" class="icon-instagram" href="' . $lumos_options['instagram_uid'] . '">'.'</a></li>';
						if (!empty($lumos_options['foursquare_uid'])) echo '<li><a target="_blank" class="icon-foursquare" href="' . $lumos_options['foursquare_uid'] . '">'.'</a></li>';

						echo '</ul><!-- end of .social-icons -->';
						?>

						<address class="text-center">
						70-017 Highway 111, Suite #1<br/>
						Rancho Mirage, CA 92270<br/>
						Tel: 760-992-7058
						</address>

						<address class="text-center">
						9201 W. Sunset Blvd. GF-1A<br/>
						West Hollywood, CA. 90069<br/>
						Tel: 310.246.2355
						</address>

						<div class="row pt-5">
				  			<div class="col-xl-6 offset-xl-3">
					  			<button class="btn btn-lg btn-primary btn-block" href="<?php echo home_url('/contact/'); ?>">Book Online</button>
				  			</div><!-- col -->
				  		</div><!-- row -->

					</div><!-- contact-info -->
				</div><!-- col -->

				<div class="f-cols col-lg-4 hidden-md-down">
					<a id="bev-box" class="hover-box" href="<?php echo home_url('/locations/'); ?>">
						<div class="location-img">
							<div class="box-title">
								<div class="aligner d-flex align-items-center">
								<h4 class="w-100 text-center">Beverly Hills</h4>
								</div>
							</div><!-- box-title -->
							<img class="img-fluid w-100 d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/contact/loc-bev-hills.jpg" alt="Beverly Hills | Dr. Q Plastic Surgery" />
						</div><!-- location-img -->
						<div class="map-img">
							<img class="img-fluid w-100 d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/contact/loc-bev-hills-map.jpg" alt="Map" />
						</div><!-- location-img -->
					</a>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- .container -->
	</section><!-- end section.contact -->

	<section class="creds hidden-sm-down">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-2 offset-md-1">
					<a href="<?php echo home_url(''); ?>"><img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/creds/cred-1.png" alt="ABPS" /></a>
				</div><!-- col -->

				<div class="col-md-2">
					<a href="<?php echo home_url(''); ?>"><img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/creds/cred-2.png" alt="CSPS" /></a>
				</div><!-- col -->

				<div class="col-md-2">
					<a href="<?php echo home_url(''); ?>"><img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/creds/cred-3.png" alt="ASPS" /></a>
				</div><!-- col -->

				<div class="col-md-2">
					<a href="<?php echo home_url(''); ?>"><img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/creds/cred-4.png" alt="ASAPS" /></a>
				</div><!-- col -->

				<div class="col-md-2">
					<a href="<?php echo home_url(''); ?>"><img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/creds/cred-5.png" alt="ASLMS" /></a>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- .container -->
	</section><!-- section -->

</div><!-- #main -->

    <footer id="footer">
    <div id="footer-info">

        <div class="bottom">
            <div class="container-fluid">
	            <div class="row py-4">
		            <div id="footer-1" class="col-md-2 offset-md-1 my-1 hidden-sm-down">
				        <h4>Quick Links</h4>
				        <nav id="footer-nav">
		                    <?php wp_nav_menu( array( 'theme_location' => 'footer-nav','menu_class' => 'nav')   ); ?>
		                </nav>
			        </div><!-- end of col-md-3 -->

			        <div id="footer-2" class="col-md-2 my-1 hidden-sm-down">
				        <h4>Services</h4>
						<nav id="footer-nav">
		                    <?php wp_nav_menu( array( 'theme_location' => 'footer-nav-2','menu_class' => 'nav')   ); ?>
		                </nav>
			        </div><!-- end of col-md-3 -->

			        <div id="footer-4" class="col-md-2 my-1">
				        <h4>Connect</h4>
				        <?php // First let's check if any of this was set

								echo '<ul class="social-icons text-xs-center text-md-left">';
								if (!empty($lumos_options['facebook_uid'])) echo '<li><a target="_blank" class="icon-facebook" href="' . $lumos_options['facebook_uid'] . '">'.'</a></li>';
								if (!empty($lumos_options['twitter_uid'])) echo '<li><a target="_blank" class="icon-twitter" href="' . $lumos_options['twitter_uid'] . '">'.'</a></li>';
								if (!empty($lumos_options['google_plus_uid'])) echo '<li><a target="_blank" class="icon-google-plus" href="' . $lumos_options['google_plus_uid'] . '">'.'</a></li>';
								if (!empty($lumos_options['youtube_uid'])) echo '<li><a target="_blank" class="icon-youtube" href="' . $lumos_options['youtube_uid'] . '">'.'</a></li>';
								if (!empty($lumos_options['linkedin_uid'])) echo '<li><a target="_blank" class="icon-linkedin" href="' . $lumos_options['linkedin_uid'] . '">'.'</a></li>';
								if (!empty($lumos_options['yelp_uid'])) echo '<li><a target="_blank" class="icon-yelp" href="' . $lumos_options['yelp_uid'] . '">'.'</a></li>';
								if (!empty($lumos_options['blogger_uid'])) echo '<li><a target="_blank" class="icon-blogger" href="' . $lumos_options['blogger_uid'] . '">'.'</a></li>';
								if (!empty($lumos_options['instagram_uid'])) echo '<li><a target="_blank" class="icon-instagram" href="' . $lumos_options['instagram_uid'] . '">'.'</a></li>';
								if (!empty($lumos_options['foursquare_uid'])) echo '<li><a target="_blank" class="icon-foursquare" href="' . $lumos_options['foursquare_uid'] . '">'.'</a></li>';

								echo '</ul><!-- end of .social-icons -->';
								?>

			        </div><!-- footer-4 -->



			        <div id="footer-4" class="col-md-4 my-1">
						<h4>Contact Us</h4>
						<div class="row">
							<div class="col-md-6">
								<address>
								Rancho Mirage:<br>
								70-017 Highway 111, Suite #1<br>
								Rancho Mirage, CA 92270<br><br>
								Tel: 760-992-7058
								</address>
							</div><!-- col -->

							<div class="col-md-6">
								<address>
								Beverly Hills:<br>
								9201 W. Sunset Blvd. GF-1A<br>
								West Hollywood, CA. 90069<br><br>
								Tel: 310.246.2355
								</address>
							</div><!-- col -->
						</div><!-- row -->

						<div class="row py-5 mt-5 lime-border-top text-center text-md-left">
	                    	<div class="col-12">
		                    	<?php esc_attr_e('Copyright &copy;', 'lumos'); ?><?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>."> <?php bloginfo('name').esc_attr_e('.', 'lumos'); ?></a> <?php esc_attr_e('All Rights Reserved.', 'lumos'); ?> <?php esc_attr_e('Designed by', 'lumos'); ?> <a href="http://creativetakemedical.com/" title="<?php echo esc_attr_e('CreativeTake Medical', 'lumos'); ?>" target="_blank">CreativeTake Web.</a>
	                    	</div><!-- col -->
	                    </div><!-- row -->

			        </div><!-- .col-md-3 -->



	            </div><!-- .row -->

            </div><!-- .container -->
        </div><!-- .bottom -->
        <div class="footer-copyright" hidden>
                    <div class="container">
	                    <div class="row py-3">
	                    	<div class="col-12">
		                    	<?php esc_attr_e('Copyright &copy;', 'lumos'); ?><?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>."> <?php bloginfo('name').esc_attr_e('.', 'lumos'); ?></a> <?php esc_attr_e('All Rights Reserved.', 'lumos'); ?> <?php esc_attr_e('Designed by', 'lumos'); ?> <a href="http://creativetakemedical.com/" title="<?php echo esc_attr_e('CreativeTake Medical', 'lumos'); ?>" target="_blank">CreativeTake Web.</a>
	                    	</div><!-- col -->
	                    </div><!-- row -->
                    </div><!-- container -->
        </div><!-- end of footer-copyright -->
    </div><!-- .footer-info -->
</footer>

<?php wp_footer(); ?>

</body>
</html>
