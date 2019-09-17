	<!-- NAVBAR -->
	<nav class="navbar navbar-home navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#anima-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- TEMPLATE LOGO -->
				<a class="navbar-brand" href="/index.php">Rohini Fernandes</a>
			</div>

			<div class="collapse navbar-collapse" id="anima-navbar-collapse">
				<ul class="navbar-contact hidden-xs">
					<li class="mob"><a href="tel:+919820788703">98207 88703</a></li>
					<li class="mob"><a href="tel:+919930004925">99300 04925</a></li>
					<li class="email"><a href="mailto:wisdomcentre.co.in@gmail.com" target="_blank">wisdomcentre.co.in@gmail.com</a></li>
					<!-- li class="facebook"><a href="https://www.facebook.com/thehouseofpawz" target="_blank"><i class="icon-facebook"></i></a></li -->
				</ul>

				<ul class="nav navbar-nav navbar-right">
                    <?php if ($navbar == "home") : ?>
						<li class="active"><a href="/index.php">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="/about.php">About</a></li>
						<li><a href="/services.php">Services</a></li>
						<li><a href="/testimonials.php">Testimonials</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#contact">Contact</a></li>
                    	<li><a href="/courses-workshops.php">Courses/Workshops</a></li>
                    <?php elseif ($navbar == "about") : ?>
						<li><a href="/index.php">Home</a></li>
						<li class="active"><a href="/about.php">About<span class="sr-only">(current)</span></a></li>
						<li><a href="/services.php">Services</a></li>
						<li><a href="/testimonials.php">Testimonials</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#contact">Contact</a></li>
                    	<li><a href="/courses-workshops.php">Courses/Workshops</a></li>
                    <?php elseif ($navbar == "services") : ?>
						<li><a href="/index.php">Home</a></li>
						<li><a href="/about.php">About</a></li>
						<li class="active"><a href="/services.php">Services<span class="sr-only">(current)</span></a></li>
						<li><a href="/testimonials.php">Testimonials</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#contact">Contact</a></li>
                    	<li><a href="/courses-workshops.php">Courses/Workshops</a></li>
                    <?php elseif ($navbar == "testimonials") : ?>
						<li><a href="/index.php">Home</a></li>
						<li><a href="/about.php">About</a></li>
						<li><a href="/services.php">Services</a></li>
						<li class="active"><a href="/testimonials.php">Testimonials<span class="sr-only">(current)</span></a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#contact">Contact</a></li>
                    	<li><a href="/courses-workshops.php">Courses/Workshops</a></li>
                    <?php elseif ($navbar == "blog") : ?>
						<li><a href="/index.php">Home</a></li>
						<li><a href="/about.php">About</a></li>
						<li><a href="/services.php">Services</a></li>
						<li><a href="/testimonials.php">Testimonials</a></li>
						<li class="active"><a href="#blog">Blog<span class="sr-only">(current)</span></a></li>
						<li><a href="#contact">Contact</a></li>
                    	<li><a href="/courses-workshops.php">Courses/Workshops</a></li>
                    <?php elseif ($navbar == "courses-workshops") : ?>
						<li><a href="/index.php">Home</a></li>
						<li><a href="/about.php">About</a></li>
						<li><a href="/services.php">Services</a></li>
						<li><a href="/testimonials.php">Testimonials</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#contact">Contact</a></li>
                    	<li class="active"><a href="/courses-workshops.php">Courses/Workshops<span class="sr-only">(current)</span></a></li>
                    <?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>