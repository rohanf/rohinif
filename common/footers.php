<!-- =========================
     ADDRESS  -MAP
============================== -->
<div class="address-map" role="tabpanel">
	<div class="container">
		<div class="row" id="address-map-tab" role="tablist">
			<div class="address col-md-offset-3 col-md-3 col-xs-offset-0 col-xs-6">
				<a href="#address-block" aria-controls="address-block" role="tab" data-toggle="tab">
					<i class="icon-paper-plane"></i>
					<h4 class="title-text text-capitalize">Contact Details</h4>
				</a>
			</div>

			<div class="map col-md-3 col-xs-6">
				<a href="#map-block" aria-controls="map-block" role="tab" data-toggle="tab">
					<i class="icon-pin-map"></i>
					<h4 class="title-text text-capitalize">Map</h4>
				</a>
			</div>
		</div>
	</div>

	<div class="tab-content">
		<div class="address-block tab-pane fade in active" id="address-block" role="tabpanel">
			<div class="container">
				<div class="row">
					<div class="row-item col-md-3">
						<i class="icon-phone-mobile"></i>
						<p>Phone : <strong> +91 98 207 88703</strong></p>
						<p>Phone : <strong> +91 99 300 04925</strong></p>
					</div>

					<div class="row-item col-md-3">
						<a href="mailto:wisdomcentre.co.in@gmail.com" target="_blank"><i class="icon-email-envelope"></i><span>wisdomcentre.co.in@gmail.com</span></a>
					</div>

					<div class="row-item col-md-3">
                        <a href="https://www.facebook.com/wisdomcentrekryon" target="_blank"><i class="icon-facebook"></i><span>Kryon Wisdom Centre</span></a>
                        <a href="https://www.facebook.com/thehouseofpawz" target="_blank"><span>The House of Pawz</span></a>
					</div>

					<div class="row-item col-md-3">
                        <a href="https://www.instagram.com/kryon.wisdomcentre" target="_blank"><i class="icon-instagram"></i><span>Kryon Wisdom Centre</span></a>
                        <a href="https://www.instagram.com/thehouseofpawz" target="_blank"><span>The House of Pawz</span></a>
					</div>
                    
					<!-- div class="row-item col-md-3">
						<i class="icon-pin-map"></i>
						<address>
							<p>Prerna 11, Military Road,</p>
							<p>Marol, Andheri East,</p>
							<p>Mumbai 400 059, India</p>
						</address>
					</div -->
				</div>
			</div>
		</div><!-- /.address-block -->

		<div class="map-block tab-pane fade" id="map-block" role="tabpanel">
			<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3769.4271914599517!2d72.8141193!3d19.132769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b61b31729b6b%3A0x9f4d47fe8c0a4c57!2sThe%20House%20Of%20Pawz!5e0!3m2!1sen!2sus!4v1568587559802!5m2!1sen!2sus" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</center>
		</div><!-- /.address-block -->
	</div> <!-- /.tab-content -->
</div>

<!-- =========================
     FOOTER
============================== -->
<footer class="footer">
	<div class="footer-head">
	</div><!-- /.footer-head -->

	<div class="footer-foot">
		<div class="container">
			<p>&copy; <?php echo date("Y"); ?> <a href="/index.php">Rohini Fernandes</a></p>
		</div>
	</div>
	<!-- /.footer-foot -->
</footer>


<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.nav.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>
<script src="/js/jquery.localScroll.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/nivo-lightbox.min.js"></script>
<script src="/js/jquery.mixitup.min.js"></script>
<script src="/js/jflickrfeed.min.js"></script>
<script src="/js/matchMedia.js"></script>
<script src="/js/jquery.ajaxchimp.min.js"></script>
<script src="/js/jquery.fitvids.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/smoothscroll.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/custom.js"></script>


<!-- GOOGLE reCAPTCHA -->
<script type="text/javascript">

    var captchaContactContainer = null;
    var captchaCommentsContainer = null;

    var expCallback = function() {
        grecaptcha.reset();
   };

    var onloadCallback = function() {

        captchaContactContainer = grecaptcha.render('recaptcha-contact', {
            'sitekey' : '6LeJNEQUAAAAAHKnM4yXTeHUFoRtNTtwGcEHxi-w',
            'callback' : function(response) {
                document.getElementById("recaptcha-contact-response").value = response;
            },
            'expired-callback': expCallback
        });

        captchaCommentsContainer = grecaptcha.render('recaptcha-comments', {
            'sitekey' : '6LeJNEQUAAAAAHKnM4yXTeHUFoRtNTtwGcEHxi-w',
            'callback' : function(response) {
                document.getElementById("recaptcha-comments-response").value = response;
            },
            'expired-callback': expCallback
        });
    };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>


<!-- GOOGLE MAP API -->
<!-- script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpsa0dCe3KnM6wYXmIYPPhvrzWcNVJcxI&amp;sensor=true"></script>

<script type="text/javascript">

	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', initialize);

	function initialize() {
		"use strict";

		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 15,
			scrollwheel: false,

			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(19.132769, 72.816308), // The House of Pawz

			// How you would like to style the map.
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{"stylers":[{"color":"#e5b563"},{"saturation":"36"},{"lightness":"-21"},{"gamma":"2.03"},{"weight":"0.90"}]},{"featureType":"all","elementType":"geometry.fill","stylers":[{"saturation":"-12"},{"visibility":"on"},{"color":"#e4b72f"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"saturation":"5"},{"lightness":"-16"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"gamma":0.01},{"lightness":20},{"saturation":"-100"},{"visibility":"on"},{"hue":"#ff0000"},{"weight":"0.01"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"saturation":-31},{"lightness":-33},{"weight":2},{"gamma":0.8},{"visibility":"off"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"saturation":"7"},{"lightness":"2"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"lightness":30},{"saturation":30}]},{"featureType":"poi","elementType":"geometry","stylers":[{"saturation":20}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"lightness":20},{"saturation":-20}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":10},{"saturation":-30}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"saturation":25},{"lightness":25}]},{"featureType":"water","elementType":"all","stylers":[{"lightness":-20}]}]
		};

		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map-block');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(19.132769, 72.816308),
			map: map,
			title: 'The House of Pawz',
			directions: ''
		});
	}

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		initialize();
	});
</script -->

<script>
	new WOW().init();
</script>

<script type="text/javascript">stLight.options({publisher: "b3115a1b-bd2f-4450-9a35-6c434de724e7", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
        var options={ "publisher": "b3115a1b-bd2f-4450-9a35-6c434de724e7", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "sharethis"]}};
        var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>
