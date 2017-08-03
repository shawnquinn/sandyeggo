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
        <div class="col-md-6"></div>
      </div>
    </div>
  </div>

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

<section class="meet">
	<div class="container">

		<div class="row align-items-center">
			<div class="col-lg-5">
				<img class="lime-border pb-5 img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/dr-q.jpg" alt="Dr. Q Plastic Surgery" />
			</div><!-- col -->

			<div class="col-lg-6 offset-lg-1">
				<h1 class="featured-title">Meet Dr Q <span>Suzanne M. Quardt, M.D.</span></h1>
				<p>Dr Q ™ performs all aspects of Plastic Surgery including cosmetic surgery of the face and body, as well as challenging cases including reconstructions after breast, skin and other cancers, trauma, and other medical conditions.  Dr Q has a beautiful, state-of-the-art Cosmetic Surgery Center that also hosts her own Dr Q Medical Spa where she offers the latest and greatest in Non-Surgical technologies for procedures such as skin-tightening, fat-reduction, advanced skin-care including Hydrafacials, medical peels, laser resurfacing, sublative radiofrequency technology, microneedling and only the best, most effective and advanced Cosmeceutical skin-care lines.  Your treatments are performed in a luxuriously comfortable and serene, spa setting!  Her practice has expanded so rapidly that she is now happy to announce a new location with a private, accredited surgery center in Beverly Hills, California as well, to help serve her many patients that travel quite far to see her!</p>
				<div class="row">
				<div class="col-xl-6">
				<button class="btn btn-lg btn-primary btn-block" href="<?php echo home_url('/meet-dr-quardt/'); ?>">Learn More</button>
				</div>
				</div>
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
				<a href="<?php echo home_url('/specials/'); ?>">
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

<?php get_footer(); } ?>
