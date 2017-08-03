<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
* Header
*/
global $lumos_options;
$lumos_options = lumos_get_options();
?>
<!DOCTYPE html>
<html
      <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <title>
    <?php wp_title('|', true, 'right');?>
  </title>
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-76x76.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>
<body
      <?php body_class(); ?> >

<header id="header">
  <div class="sticky-container sticky">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
          <?php if(!is_frontpage) : ?>
					<div id="logo" >
				      <h1>
				        <a href="<?php echo home_url('/'); ?>">
				          <img class="img-fluid d-block mx-auto" src="<?php header_image(); ?>" width="<?php if (function_exists('get_custom_header')) {
                      echo get_custom_header() -> width;
                  } else {
                      echo HEADER_IMAGE_WIDTH;
                  } ?>" height="<?php if (function_exists('get_custom_header')) {
                      echo get_custom_header() -> height;
                  } else {
                      echo HEADER_IMAGE_HEIGHT;
                  } ?>" alt="<?php bloginfo('name'); ?>" />
				        </a>
				      </h1>
				    </div><!-- end of #logo -->
				</div>
				<div id="contact-bar" class="col-lg-7">
					<div id="social" class="row align-items-center hidden-md-down">
						<div class="col-xl-6 text-center text-xl-left">
							<p>Schedule a Consultation: <a href="tel:+1-760-324-2660">(760) 324.2660</a></p>
            </div>

            <div class="col-xl-6 text-center text-xl-left">
							<?php // First let's check if any of this was set

                            echo '<ul class="social-icons my-3">';
                            if (!empty($lumos_options['facebook_uid'])) {
                                echo '<li><a target="_blank" class="icon-facebook" href="' . $lumos_options['facebook_uid'] . '">'.'</a></li>';
                            }
                            if (!empty($lumos_options['twitter_uid'])) {
                                echo '<li><a target="_blank" class="icon-twitter" href="' . $lumos_options['twitter_uid'] . '">'.'</a></li>';
                            }
                            if (!empty($lumos_options['google_plus_uid'])) {
                                echo '<li><a target="_blank" class="icon-google-plus" href="' . $lumos_options['google_plus_uid'] . '">'.'</a></li>';
                            }
                            if (!empty($lumos_options['youtube_uid'])) {
                                echo '<li><a target="_blank" class="icon-youtube" href="' . $lumos_options['youtube_uid'] . '">'.'</a></li>';
                            }
                            if (!empty($lumos_options['linkedin_uid'])) {
                                echo '<li><a target="_blank" class="icon-linkedin" href="' . $lumos_options['linkedin_uid'] . '">'.'</a></li>';
                            }
                            if (!empty($lumos_options['yelp_uid'])) {
                                echo '<li><a target="_blank" class="icon-yelp" href="' . $lumos_options['yelp_uid'] . '">'.'</a></li>';
                            }
                            if (!empty($lumos_options['blogger_uid'])) {
                                echo '<li><a target="_blank" class="icon-blogger" href="' . $lumos_options['blogger_uid'] . '">'.'</a></li>';
                            }
                            if (!empty($lumos_options['instagram_uid'])) {
                                echo '<li><a target="_blank" class="icon-instagram" href="' . $lumos_options['instagram_uid'] . '">'.'</a></li>';
                            }
                            if (!empty($lumos_options['foursquare_uid'])) {
                                echo '<li><a target="_blank" class="icon-foursquare" href="' . $lumos_options['foursquare_uid'] . '">'.'</a></li>';
                            }

                            echo '</ul><!-- end of .social-icons -->';
                            ?>
						</div><!-- col -->
					</div><!-- row -->

        <?php endif; ?>


					<div id="main-nav" class="row">
						<div class="col-12 p-0">
							<nav id="access">
						      <ul class="mobile-nav hidden-lg-up">
						        <li>
						          <a href="<?php echo home_url('/contact/'); ?>">
						            <i class="fa fa-envelope" aria-hidden="true">
						            </i>
						          </a>
						        </li>
						        <li>
						          <a href="tel:+1-760-324-2660">
						            <i class="fa fa-phone" aria-hidden="true">
						            </i>
						          </a>
						        </li>
						      </ul>
						      <?php wp_nav_menu(array( 'theme_location' => 'header-nav','menu_class' => 'sf-menu menu-slick')); ?>
						    </nav><!-- nav#access -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container-fluid -->
  </div>
  <!-- .container-->
  </div>
  <!-- .container-->

</header>
<!-- #header -->


<div id="main">
  <div class="float-box" hidden>
    <a class="clicker" href="<?php echo home_url(''); ?>">
      <span>Contact Us
      </span>
    </a>
    <div class="row">
	    	<div class="col col-md-4">
	      <address>
	      </address>
	      <a href="<?php echo home_url('/location/'); ?>">
	        <img class="img-fluid mt-2" src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="Location" />
	      </a>
	    </div>
	    <!-- end of col-1-3 -->
	    <div class="col col-md-4">
	      <?php echo do_shortcode('[contact-form-7 id="136" title="Contact form 1"]') ?>
	    </div>
	    <!-- end of col-1-3 -->
	    <div class="col col-md-4 links d-flex">
		  <div id="flex-item" class="w-100 d-block">
		      <a href="<?php echo home_url(''); ?>">Current Specials
		      </a>
		      <a href="<?php echo home_url(''); ?>">Get Directions
		      </a>
		      <a href="<?php echo home_url('/photo-gallery/'); ?>">Photo Gallery
		      </a>
		  </div><!-- flex-item -->
	    </div>
	    <!-- end of col-1-3 -->
    </div><!-- row -->
  </div>
  <!-- end of float-box -->
