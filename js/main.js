//Begin jQuery
jQuery(function($) {
		
		/****************************************************************/
		/*** //Init Headroom ***/
		/****************************************************************/
		
		var $head = $("#header > div").height();
		
		$(".sticky-container").headroom({
			// vertical offset in px before element is first unpinned
			offset : $head,
			tolerance : 10
		});
		
		/****************************************************************/
		/*** //Call Sticky Menu Waypoints ***/
		/****************************************************************/
		var sticky = new Waypoint.Sticky({
			element: $('.sticky')[0]
			//offset: 100 // Apply "stuck" when element 30px from top
		});

		/****************************************************************/
		/*** Add/Remove Class on Scroll ***/
		/****************************************************************/
		$(window).scroll(function() {
		    const scroll = $(window).scrollTop();
			const x = $(".sticky");

		    if ( scroll >= 1 ) {
		        $(x).addClass("scrolled");
		    } else {
		        $(x).removeClass("scrolled");
		    }
		});


		/****************************************************************/
		/*** Mousover ***/
		/****************************************************************/
		// Slider Menu Homepage 		
		$('.columned').hover(
		    function() {
		        // Called when the mouse enters the element
						$(this).children('h3').fadeOut(400);
						$(this).children('.procedure-menu').fadeIn(400);
		    },
		    function() {
		        // Called when the mouse leaves the element
						$(this).children('h3').fadeIn(400);
						$(this).children('.procedure-menu').fadeOut(400);
		    }
 		);
 		
 		
 		var $rM = $('#rancho, #rancho-box');
 		// Contact Footer
 		$rM.hover(
		    function() {
		        // Called when the mouse enters the element
				$rM.addClass("hovered");
				setTimeout(function(){
			       $("#rancho-box .box-title h4").addClass("l-space");
			   }, 100);
		    },
		    function() {
		        // Called when the mouse leaves the element
				$rM.removeClass("hovered");
				$("#rancho-box .box-title h4").removeClass("l-space");
		    }
 		);
 		
 		var $bH = $('#bevhills, #bev-box');
 		// Contact Footer
 		$bH.hover(
		    function() {
		        // Called when the mouse enters the element
				$bH.addClass("hovered");
				setTimeout(function(){
			       $("#bev-box .box-title h4").addClass("l-space");
			   }, 100);
		    },
		    function() {
		        // Called when the mouse leaves the element
				$bH.removeClass("hovered");
				$("#bev-box .box-title h4").removeClass("l-space");
		    }
 		);
 		
		/****************************************************************/
		/*** ScrollMagic Init ***/
		/****************************************************************/
		//const controller = new ScrollMagic.Controller({ globalSceneOptions : { triggerHook: "onEnter", duration: "200%"}});

		/*** PX-1 *** --------------------------- */

/*
		function px($name, $section, $id) {
			$name = TweenMax.to($section, 1, { css: { backgroundPosition: 'center 100%' }, ease: Linear.easeNone });
			new ScrollMagic.Scene( { triggerElement: $id} ).setTween($name).addTo(controller);
		}

		//Parallax Section 1
		px('px1','section.review','#px-1');

		//Parallax Section 2
		px('px2','section.lake','#px-2');

		//Parallax Section 3
		px('px3','section.dock','#px-3');

		//Parallax Section 3
		px('px4','section.lake-master','#px-4');
*/


		/****************************************************************/
		/*** //FastClick for Native Feel and Removal of 300ms Touch Delay ***/
		/****************************************************************/
		$(function() {
			FastClick.attach(document.body);
		});


		/****************************************************************/
		/*** //Slick Nav ***/
		/****************************************************************/
		$('.menu-slick').slicknav({
			label: '',
			duration: 300,
			prependTo: '#access'
		});
		$('ul.sf-menu').supersubs({
			minWidth: 16,
			// minimum width of sub-menus in em units
			maxWidth: 22,
			// maximum width of sub-menus in em units
			extraWidth: 1 // extra width can ensure lines don't sometimes turn over
		})
		$('ul.sf-menu').superfish(); // call supersubs first, then superfish


		/****************************************************************/
		/*** /* * No Captcha reCaptcha * */
		//reCaptcha Display on form input focus ***/
		/****************************************************************/
		$('.g-recaptcha').hide();
		$(".widget .wpcf7 input, .widget .wpcf7 textarea").click(function() {
			$('section.contact .g-recaptcha').slideDown();
		});
		//reCaptcha Display on form input focus for Float-box
		$(".float-box .wpcf7 input, .float-box .wpcf7 textarea").click(function() {
			$('.float-box .g-recaptcha').slideDown();
		});
		//reCaptcha Display on Contect #Primary Form input focus - Contact Page
		$('.g-recaptcha').hide();
		$("#primary .wpcf7 input, #primary .wpcf7 textarea").click(function() {
			$('#primary .g-recaptcha').slideDown()();
		});
		//reCaptcha Display on Contect #Primary Form input focus - Contact Page
		$('.g-recaptcha').hide();
		$("#secondary .wpcf7 input, #secondary .wpcf7 textarea").click(function() {
			$('#secondary .g-recaptcha').slideDown()();
		});


		/****************************************************************/
		/*** //Float Box Clicker ***/
		/****************************************************************/
		$('.float-box a.clicker').click(function(event) {
			event.preventDefault ? event.preventDefault() : event.returnValue = false;
			$('.float-box').toggleClass('hidden-reveal');
		});


		/****************************************************************/
		/*** //Toggle States ***/
		/****************************************************************/
		$('.menu-widget ul.sub-menu').hide(); //Hide children by default
		$('.menu-widget li a').click(function(event) {
			event.preventDefault ? event.preventDefault() : event.returnValue = false;
			$(this).siblings('ul.sub-menu').slideToggle(200);
		});
		$('.menu-widget li a').click(function(event) {
			event.preventDefault ? event.preventDefault() : event.returnValue = false;
			$(this).toggleClass('arrow-down');
		});
		$('.menu-widget li li a').click(function() {
			$(this).removeClass('arrow-down');
			window.location.href = $(this).attr('href');
		});


		/****************************************************************/
		/*** //BX Slider Main ***/
		/****************************************************************/
		$('.bx-slider').bxSlider({
			autoControls: false,
			pager: false,
			adaptiveHeight: true,
			mode: 'fade',
			controls: false,
			auto: true,
			pause: 6000,
			speed: 2000,
			randomStart: false,
			touchEnabled: true
		});

		$('.bx-review').bxSlider({
			autoControls: false,
			pager: false,
			adaptiveHeight: true,
			mode: 'fade',
			controls: true,
			auto: true,
			pause: 10000,
			speed: 400,
			randomStart: false,
			touchEnabled: true
		});

		/****************************************************************/
		/*** //Hover States ***/
		/****************************************************************/
		$('.sf-menu ul.sub-menu').hover(function() {
			$(this).parent().children('a').addClass('hover');
		}, function() {
			$(this).parent().children('a').removeClass('hover');
		});
		//Animate CSS
		$('#searchform .field').on('focus', function() {
			$('#searchform button i').addClass('animated infinite pulse');
		}).on('blur', function() {
			$('#searchform button i').removeClass('animated infinite pulse');
		});

});
