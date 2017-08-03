<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/**
* Site Front Page
******************
* Globalize Theme Options
*/
global $lumos_options;
$lumos_options = lumos_get_options();
/**
* If front page is set to display the
* blog posts index, include home.php;
* otherwise, display static front page
* content
*/
if ( 'posts' == get_option( 'show_on_front' ) && $lumos_options['front_page'] != 1 ) {
get_template_part( 'home' );
} elseif ( 'page' == get_option( 'show_on_front' ) && $lumos_options['front_page'] != 1 ) {
$template = get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true );
$template = ( $template == 'default' ) ? 'index.php' : $template;
locate_template( $template, true );
} else {
get_header();
//test for first install no database
$db = get_option( 'lumos_theme_options' );
//test if all options are empty so we can display default text if they are
$empty = ( empty( $lumos_options['home_headline'] ) && empty( $lumos_options['home_subheadline'] ) && empty( $lumos_options['home_content_area'] ) ) ? false : true;
?>
<section class="slider">

  <div class="boxed">
    <div class="container hidden-md-down">
      <div class="row align-items-center">
        <div class="col-md-5">
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
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- boxed -->

  <div class="contact-box">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-9 col-xl-8">
          <div class="row align-items-center added-bg text-center">
            <div class="col-md-4 spec"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+1-217-528-7541">(217) 528-7541</a></div>
            <div class="col-md-4">
              <?php // First let's check if any of this was set

                          echo '<ul class="social-icons">';
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
                        </div>
            <div class="col-md-4 spec"> <a href="<?php echo home_url(''); ?>">Book Online <i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
          </div>
          <!-- row -->
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- contact-box -->

  <ul class="bx-slider">
    <li id="one">
    </li>

    <li id="two">
    </li>
  </ul>
  <!-- bx-slider -->
</section>
<!--end of .slider -->
<section class="home-content">
  <div class="container">
    <div id="primary">
      <div id="content">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'loop-header' ); ?>
        <?php lumos_entry_before(); ?>
        <div id="post-<?php the_ID(); ?>"
             <?php post_class(); ?> >
        <?php lumos_entry_top(); ?>
        <?php //get_template_part( 'post-meta-page' ); ?>
        <div class="post-entry">
          <?php the_content(__('Read more &#8250;', 'lumos')); ?>
          <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'lumos'), 'after' => '</div>')); ?>
        </div>
        <!-- end of .post-entry -->
        <?php get_template_part( 'post-data' ); ?>
        <?php lumos_entry_bottom(); ?>
      </div>
      <!-- end of #post--->
      <?php
		endwhile;
		get_template_part( 'loop-nav' );
		else :
		get_template_part( 'loop-no-posts' );
		endif;
		?>
    </div>
    <!-- end of #content -->
  </div>
  <!-- end of primary -->
  </div>
<!-- .container -->
</section>
<!-- section.home-content -->

<section id="px-1" class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-6">
        <div class="box">
          <a href="<?php echo home_url('//'); ?>">
            <h4>Laparoscopic <br />Surgery</h4>
          </a>
          <div class="hover-arrow">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
              <i class="fa fa-angle-right fa-stack-1x"></i>
            </span>
          </div>
          <!-- hover arrow -->
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="box">
          <a href="<?php echo home_url('//'); ?>">
            <h4>Colon/Rectal <br />Surgery</h4>
          </a>
          <div class="hover-arrow">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
              <i class="fa fa-angle-right fa-stack-1x"></i>
            </span>
          </div>
          <!-- hover arrow -->
      </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="box">
          <a href="<?php echo home_url('//'); ?>">
            <h4>General <br />Surgery</h4>
          </a>
          <div class="hover-arrow">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
              <i class="fa fa-angle-right fa-stack-1x"></i>
            </span>
          </div>
          <!-- hover arrow -->
      </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="box">
          <a href="<?php echo home_url('//'); ?>">
            <h4>Breast<br />Surgery</h4>
          </a>
          <div class="hover-arrow">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
              <i class="fa fa-angle-right fa-stack-1x"></i>
            </span>
          </div>
          <!-- hover arrow -->
      </div>
      </div>
    </div>
  </div>
</section>

<section class="meet">
	<div class="container">

		<div class="row">
			<div class="col-12">
        <h1 class="featured-title text-center">Meet Our Team <span>Experience. Excellence. Commitment.</span></h1>
			</div><!-- col -->
    </div>
    <!-- row -->

      <div class="row py-5 align-items-center">
			      <div class="col-sm-6">
      				<div class="row">
      				  <div class="col-lg-4 mb-4">
      				        <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/doc-fpo.jpg" alt="Dr. Name" />
      				  </div>

      				  <div class="col-lg-8">
                  <h4 class="text-center text-lg-left">Name of Doctor <span>Doc's Title</span></h1>
          				<p>Phasellus vel auctor odio, vitae aliquam massa. Suspendisse vestibulum varius ligula, quis hendrerit dolor auctor a. Integer vel lobortis sem, at condimentum dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis tempor pretium.</p>
          				<div class="row">
            				<div class="col-xl-9">
            				      <button class="btn btn-lg btn-primary btn-block" href="<?php echo home_url('/meet-dr-quardt/'); ?>">Learn More</button>
            				</div>
          				</div>
      				  </div>
      				</div>
      			</div><!-- col -->

            <div class="col-sm-6">
              <div class="row">
                <div class="col-lg-4 mb-4">
                      <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/doc-fpo.jpg" alt="Dr. Name" />
                </div>

                <div class="col-lg-8">
                  <h4 class="text-center text-lg-left">Name of Doctor <span>Doc's Title</span></h1>
                  <p>Phasellus vel auctor odio, vitae aliquam massa. Suspendisse vestibulum varius ligula, quis hendrerit dolor auctor a. Integer vel lobortis sem, at condimentum dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis tempor pretium.</p>
                  <div class="row">
                    <div class="col-xl-9">
                          <button class="btn btn-lg btn-primary btn-block" href="<?php echo home_url('/meet-dr-quardt/'); ?>">Learn More</button>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- col -->
		  </div><!-- row -->

	</div><!-- .container -->
</section><!-- section -->

<section class="review">
	<div class="container">
		<div class="row text-center">
			<div class="col-12">
				<h2 class="featured-title">Testimonials <span>What Our Patients Are Saying</span></h2>

				<div class="bx-review">
					<div class="quote">
						<div class="row align-items-center">
							<div class="col-md-5">
								<blockquote>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac enim scelerisque, congue nisi sit amet, posuere diam. Pellentesque fermentum purus in lorem lobortis laoreet. Donec maximus velit vel dapibus bibendum. Integer facilisis mauris facilisis ornare facilisis. Nunc ut ligula ut dolor porttitor consequat eget eu mi...” <span>Jane Doe, Rancho Mirage, CA</span></blockquote>
							</div><!-- col -->
							<div class="col-md-6 offset-md-1 hidden-sm-down">
								<img class="lime-border pb-5 img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/reviews/r1.jpg" alt="Testimonial" />
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- quote -->

					<div class="quote">
						<div class="row align-items-center">
							<div class="col-md-5">
								<blockquote>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac enim scelerisque, congue nisi sit amet, posuere diam. Pellentesque fermentum purus in lorem lobortis laoreet. Donec maximus velit vel dapibus bibendum. Integer facilisis mauris facilisis ornare facilisis. Nunc ut ligula ut dolor porttitor consequat eget eu mi...” <span>Joanna Smith, Palm Desert, CA</span></blockquote>
							</div><!-- col -->
							<div class="col-md-6 offset-md-1 hidden-sm-down">
								<img class="lime-border pb-5 img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/reviews/r2.jpg" alt="Testimonial" />
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- quote -->

					<div class="quote">
						<div class="row align-items-center">
							<div class="col-md-5">
								<blockquote>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac enim scelerisque, congue nisi sit amet, posuere diam. Pellentesque fermentum purus in lorem lobortis laoreet. Donec maximus velit vel dapibus bibendum. Integer facilisis mauris facilisis ornare facilisis. Nunc ut ligula ut dolor porttitor consequat eget eu mi...” <span>Jamie Jones, Rancho Mirage, CA</span></blockquote>
							</div><!-- col -->
							<div class="col-md-6 offset-md-1 hidden-sm-down">
								<img class="lime-border pb-5 img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/reviews/r3.jpg" alt="Testimonial" />
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- quote -->

				</div><!-- bx-review -->

				<div class="row pt-4">
					<div class="col-md-5">
						<button class="btn btn-lg btn-primary btn-block" href="<?php echo home_url(''); ?>">Learn More</button>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- .container -->
</section><!-- section -->

<section class="call-to-actions">
	<div class="container">
		<div class="row">
			<div class="cta col-sm-4">
				<a href="<?php echo home_url('/photo-gallery/'); ?>">
					<div class="box">
						<h4>Photo Gallery</h4>
						<img class="w-100 d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/ctas/cta-1.jpg" alt="Photo Gallery" />
					</div>
				</a>
			</div><!-- col -->

			<div class="cta col-sm-4">
				<a href="<?php echo home_url('//'); ?>">
					<div class="box">
						<h4>Current Specials</h4>
						<img class="w-100 d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/ctas/cta-2.jpg" alt="Current Specials" />
					</div>
				</a>
			</div><!-- col -->

			<div class="cta col-sm-4">
				<a href="<?php echo home_url('/video-gallery/'); ?>">
					<div class="box">
						<h4>Video Gallery</h4>
						<img class="w-100 d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/ctas/cta-3.jpg" alt="Video Gallery" />
					</div>
				</a>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- .container -->
</section><!-- section -->

<?php get_footer(); } ?>
