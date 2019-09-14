<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title>Home food vs Packaged food | Rohini Fernandes</title>

    <!-- META DATA -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Rohini Fernandes" />

	<?php
		global $navbar;
		$navbar = "blog";
		include($_SERVER['DOCUMENT_ROOT'] . "/common/headers.php");
	?>

    <!-- =========================
       FACEBOOK OPEN GRAPH
    ============================== -->
    <meta property="og:site_name" content="Rohini Fernandes"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="http://rohinifernandes.com/blog/home-food-vs-packaged-food.php"/>
    <meta property="og:title" content="Home food vs Packaged food"/>
    <meta property="og:description" content="This is one query that all pet owners have. Should I cook for my pet or buy ready made food?"/>
    <meta property="article:author" content="https://www.facebook.com/RohiniFernandesDogTraining"/>

    <!-- =========================
       SHARETHIS
    ============================== -->
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript" src="https://ss.sharethis.com/loader.js"></script>
</head>
<body class="blog">
<!-- =========================
     HOME
============================== -->
<div class="home" id="home">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/common/navigation.php"); ?>
</div>



<!-- =========================
     PAGE HEADER
============================== -->
<div class="page-head">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header class="section-header">
					<h1 class="title-text">Home food vs Packaged food</h1>
				</header>
				<p><a href="../index.php">Return to Home page</a></p>
			</div>
		</div>
	</div>
</div>



<!-- =========================
     PAGE BODY
============================== -->
<div class="page-body single-blog-page">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- =========================
				     IMAGE WITH TEXT AND HIGHLIGHTS
				============================== -->
				<article>
                                        <p>This is one query that all pet owners have. Should I cook for my pet or buy ready made food? Does the food that I cook have all the required nutrition? Is packaged food made by specialists who include every necessary thing? Does my pet enjoy what I feed him? Is packaged food made from animal remains?</p>

                                        <p>The good health of your pet depends on a balanced and nutritious diet. That is the desire of every pet owner irrespective of whether they feed home or ready made food. Packaged food is expensive but saves time and energy. We also believe it has all the necessary ingredients. On the contrary we also believe that the healthiest food for us is what we cook, fresh at home. If that is so, then why would you have it any other way for your pet?</p>

                                        <p>Cooking at home no doubt takes time and effort. What you consider healthy for your body may not necessarily be good for theirs. You have to cater to their nutritional needs. Commercially made pet food is not designed for the needs of your pet alone. It is made for the general population. When you cook for your pet, you are aware of what your dog likes and needs. You are also able to ensure that only the best ingredients go into the recipe.</p>

                                        <p>If you have to rely on your housemaid to prepare your pets food and you are unsure of her capabilities then it is best to get packaged food. She may unknowingly include common human foods that may prove fatal to your pet.</p>

                                        <p>Today pet food manufacturers are well aware of the norms to be followed. Growing consumer awareness has propelled them to keep nutritional value at the very top. If you choose to cook at home, you will have to consult with your vet on a regular basis about the ingredients and ideal proportions for your pet. Food from a bag does not require much thought.</p>

                                        <p>In the end, don’t let your lifestyle be the factor that deters you from cooking for your pet. If it is then you need to reassess your priorities. Our pets are dependent on us and we are obligated to do our very best for them.</p>
                                        
                                        <p align="right">Rohini Fernandes<br>May 2015</p>

				</article>
			</div> <!-- end of /.col-md-8 -->


			<!-- =========================
			     SIDEBAR
			============================== -->
			<div class="col-md-4 sidebar hidden-sm hidden-xs">

			<?php
				global $blog_post;
			    $blog_post = "home-food-vs-packaged-food";
			    include($_SERVER['DOCUMENT_ROOT'] . "/common/popular_posts.php");
			?>

			</div> <!-- /END SIDEBAR -->
		</div>
	</div>
</div>


<!-- =========================
     COMMENT REPLY SECTION
============================== -->
<section class="comment contact" id="comment-section">
	<div class="container">
		<header class="section-header">
			<h2 class="title-text">Leave a comment</h2>
			<p class="sub-title">Join the discussion.</p>
		</header>

		<div class="row" id="comment-reply">
			<div class="col-md-12">
				<form id="comments-form" class="comments-form" name="comments-form" method="post" role="form">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="sr-only" for="name">Full Name</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="icon-user"></i></div>
                                                                        <input type="text" class="form-control" id="comments-name" name="name" placeholder="Your full name" required="required">
								</div>
							</div>

							<div class="form-group">
								<label class="sr-only" for="name">Email Address</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="icon-email-envelope"></i></div>
                                                                        <input type="email" class="form-control" id="comments-email" name="email" placeholder="Your email address" required="required">
								</div>
							</div>

							<div class="form-group">
								<label class="sr-only" for="name">Website Address</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="icon-globe-world"></i></div>
                                                                        <input type="url" class="form-control" id="comments-url" name="url" placeholder="Website URL (optional)">
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label class="sr-only" for="name">Message</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="icon-email-envelope"></i></div>
                                                                        <textarea class="form-control" id="comments-message" name="message" placeholder="Write your message" rows="4" required="required"></textarea>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
                                                        <div class="form-group">
                                                                <div id="recaptcha-comments"></div>
                                                                <input type="hidden" id="recaptcha-comments-response" value="">
                                                        </div>
							<div class="form-group">
								<label class="sr-only" for="name">Send Comment</label>
								<button class="btn btn-iconic btn-fill"><i class="icon-paper-plane"></i> <span class="btn-lg">Leave a comment</span></button>
							</div>
						</div>

						<div class="col-sm-12">
							<p class="success-msg">Your comment has been successfully posted!</p>
							<p class="error-msg">Error! Something went wrong!</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<!-- =========================
     BLOG
============================== -->
<a id="blog" name="blog" style="display:block;position:relative;top:0px;visibility:hidden;"></a>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/common/popular_posts_footer.php"); ?>



<!-- =========================
     SKYPE TRAINING
============================== -->
<section class="skype-training" id="skype-training">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="row-item col-md-8 text-center">
					<h3 class="title-text">Skype Training Sessions</h3>
					<p>Rohini also provides consultation and training sessions over Skype now.</p>
				</div>
			</div>
		</div> <!-- end of .container -->
	</div> <!-- end of .overlay -->
</section>



<!-- =========================
     CONTACT US
============================== -->
<section class="contact" id="contact">
	<div class="container">
		<header class="section-header">
			<h2 class="title-text">Get in touch</h2>
			<p class="sub-title">If you have any questions feel free to contact us.</p>
		</header>

		<div class="contact-block">
			<form id="contact-form" class="contact-form" name="contact-form" method="post" role="form">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="sr-only" for="name">Full Name</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="icon-user"></i></div>
                                                                <input type="text" class="form-control" id="contact-name" name="name" placeholder="Your full name" required="required">
							</div>
						</div>

						<div class="form-group">
							<label class="sr-only" for="email">Email Address</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="icon-email-envelope"></i></div>
                                                                <input type="email" class="form-control" id="contact-email" name="email" placeholder="Your email address" required="required">
							</div>
						</div>

						<div class="form-group">
							<label class="sr-only" for="phone">Phone Number</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="icon-call-phone"></i></div>
                                                                <input type="tel" class="form-control" id="contact-phone" name="phone" placeholder="Phone number (optional)">
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label class="sr-only" for="message">Message</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="icon-email-envelope"></i></div>
								<textarea class="form-control" id="contact-message" name="message" placeholder="Write your message" rows="7" required="required"></textarea>
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
                                                        <div id="recaptcha-contact"></div>
                                                        <input type="hidden" id="recaptcha-contact-response" value="">
						</div>

						<div class="form-group">
							<label class="sr-only">Send Email</label>
							<button class="btn btn-iconic btn-fill"><i class="icon-paper-plane"></i> <span class="btn-md">Send Message</span></button>
						</div>
					</div>

					<div class="col-sm-12">
						<p class="success-msg"><i class="icon-check-mark"></i> Your Message has been Successfully Sent!</p>
						<p class="error-msg"><i class="icon-exclamation"></i> Error! Something went wrong!</p>
					</div>
				</div>
			</form>
		</div><!-- /.contact-form -->
	</div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/common/footers.php"); ?>

</body>
</html>
