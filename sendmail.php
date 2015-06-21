<?php

require_once "recaptchalib.php";

// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = "6LfqoAgTAAAAABJv9LOnr1tPb09QqbC42iFJ7DwK";
$secret = "6LfqoAgTAAAAADtWnRepeoIbpV8JZlM0MM-EDpDU";

// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
$lang = "en";

// The response from reCAPTCHA
$resp = null;

// The error code from reCAPTCHA, if any
$error = null;
$reCaptcha = new ReCaptcha($secret);

// Was there a reCAPTCHA response?
if ($_POST["grecaptcha"]) {

    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["grecaptcha"]
    );
}


// Variables
$type = trim($_POST['type']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$phone = trim($_POST['phone']);
$url = trim($_POST['url']);


// Email address validation - works with php 5.2+
function is_email_valid($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($response != null && $response->success) {
if( isset($name) && isset($email) && isset($message) && is_email_valid($email) ) {

	// Avoid Email Injection and Mail Form Script Hijacking
	$pattern = "/(content-type|bcc:|cc:|to:)/i";
	if( preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $message) ) {
		exit;
	}

	$to = "sudeep.bhaumick@gmail.com";

        if ( $type == 'contact') {

            $sub = "Contact Form @ RohiniFernandes.Com";

        } else {

            $sub = " Comments Form @ RohiniFernandes.Com";
        }


	// HTML Elements for Email Body
	$body = <<<EOD
	<strong>Name:</strong> $name <br>
	<strong>Email:</strong> <a href="mailto:$email?subject=feedback" "email me">$email</a> <br> <br>
	<strong>Phone:</strong> $phone <br>
	<strong>Url:</strong> <a href="$url" target="_blank">$url</a> <br>
	<strong>Message:</strong> $message <br>
EOD;
//Must end on first column

	$headers = "From: $name <$email>\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// PHP email sender
	mail($to, $sub, $body, $headers);
}
}
?>