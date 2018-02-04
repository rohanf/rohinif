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


<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.nav.js"></script>
<script src="../js/jquery.scrollTo.min.js"></script>
<script src="../js/jquery.localScroll.min.js"></script>
<script src="../js/jquery.countdown.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.counterup.min.js"></script>
<script src="../js/nivo-lightbox.min.js"></script>
<script src="../js/jquery.mixitup.min.js"></script>
<script src="../js/jflickrfeed.min.js"></script>
<script src="../js/matchMedia.js"></script>
<script src="../js/jquery.ajaxchimp.min.js"></script>
<script src="../js/jquery.fitvids.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/custom.js"></script>


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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpsa0dCe3KnM6wYXmIYPPhvrzWcNVJcxI&amp;sensor=true"></script>

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
			center: new google.maps.LatLng(19.1193154, 72.8869585), // Animal Angels Foundation

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
			position: new google.maps.LatLng(19.1193154, 72.8869585),
			map: map,
			title: 'Anima!'
		});
	}

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		initialize();
	});
</script>

<script>
	new WOW().init();
</script>

<script type="text/javascript">stLight.options({publisher: "b3115a1b-bd2f-4450-9a35-6c434de724e7", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
        var options={ "publisher": "b3115a1b-bd2f-4450-9a35-6c434de724e7", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "sharethis"]}};
        var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>
