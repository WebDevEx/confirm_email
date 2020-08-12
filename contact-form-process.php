<?php

if(isset($_POST['email'])) {


    function died($error) {

        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['site-address']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['service']) ||
        !isset($_POST['start']) ||
        !isset($_POST['scope']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name'];
    $address = $_POST['site-address'];
    $email_from = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $start = $_POST['start'];
    $scope = $_POST['scope'];
    $comments = $_POST['comments'];


    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
        // Build POST request:
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6Lffx7gUAAAAAAYLaGy7fD7ZtdT-gUWKsoo-Vls4';
        $recaptcha_response = $_POST['recaptcha_response'];
        // Make and decode POST request:
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);
        // Take action based on the score returned:
        if ($recaptcha->score >= 0.5) {
            // Verified - send email
        } else {
            // Not verified - show form error
        }
    }


    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {

        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$name)) {

        $error_message .= 'The Name you entered does not appear to be valid.<br />';

    }


    if(strlen($comments) < 2) {

        $error_message .= 'The Message you entered do not appear to be valid.<br />';

    }

    if(strlen($error_message) > 0) {

        died($error_message);

    }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {

        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);

    }

    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Site Address: ".clean_string($address)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone Number: ".clean_string($phone)."\n";
    $email_message .= "What Service Are You Inquiring About?: ".clean_string($service)."\n";
    $email_message .= "When Do You Need The Work To Start?: ".clean_string($start)."\n";
    $email_message .= "What Is The Scope Of The Job?: ".clean_string($scope)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers

    $email_to = "info@gabraelhousedemolition.com.au";
    $email_subject = "Contact Form Submitted By: $name";
    $headers = 'From: info@gabraelhousedemolition.com.au' . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);

    ?>

    <?php require 'config.inc.php'; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Contact Form | Gabrael House Demolition</title>
        <meta name="description" content="Contact Form - At Gabrael House Demolition our aim is to provide our customers with the best service possible at a competitive market price. Get A Free Quote!" />
        <?php include_once HOME_PATH . 'head-links.php'; ?>
    </head>

    <body>
    <div class="page-wraper">
        <?php include_once HOME_PATH . 'header.php'; ?>
        <div class="page-content">

            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image: url(images/background/banner.png); background-color: #ffe22d;">
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h1 class="font-weight-900">Message Sent Successful</h1>
                            </div>
                        </div>
                        <div>
                            <ul class="wt-breadcrumb breadcrumb-style-2">
                                <li><a href="index.php">Home</a></li>
                                <li>Message Sent Successful</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-full p-tb80 text-center">
                <div class="container">
                    <div class="row">
                        <h2>Thank You For Contacting Us :)</h2>
                        <h3 class="p-b50 text-black">We Will Get Back To You Shortly</h3>
                        <a href="index.php" class="site-button site-btn-effect button-lg"><span>Go To Homepage</span></a>
                    </div>
                </div>
            </div>

            <?php include_once HOME_PATH . 'testimonials.php'; ?>
            <?php include_once HOME_PATH . 'builders.php'; ?>

        </div>
        <?php include_once HOME_PATH . 'footer.php'; ?>
    </div>
    </body>
    </html>



    <?php

}

?>