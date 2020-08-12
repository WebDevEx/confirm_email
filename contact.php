<?php require 'config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us - Gabrael House Demolition</title>
    <meta name="description" content="Contact Us - At Gabrael House Demolition our aim is to provide our customers with the best service possible at a competitive market price. Get A Free Quote!" />
    <?php include_once HOME_PATH . 'head-links.php'; ?>
</head>

<body>
<div class="page-wraper">
    <?php include_once HOME_PATH . 'header.php'; ?>
    <div class="page-content">

        <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image: url(/images/background/banner.png); background-color: #ffe22d;">
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h1 class="font-weight-900">Contact Us</h1>
                        </div>
                    </div>
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="/index.php">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-full small-device  p-tb80">

            <div class="section-content overlay-wraper bg-repeat bg-primary overflow-hide" style="background-image:url(/images/background/banner.png);">
                <div class="overlay-main opacity-05"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <form name="contactform" method="post" action="/contact-form-process.php" class="contact-one">
                                <div class="section-head text-left">
                                    <h2 class="text-uppercase font-weight-900 m-b5 text-black">Get In Touch</h2>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="site-address">Site Address</label>
                                    <input type="text" class="form-control" id="site-address" name="site-address">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="seeAnotherFieldGroup">What Service Are You Inquiring About?</label>
                                    <select class="form-control" id="seeAnotherFieldGroup" name="service">
                                        <option value="House Demolition">House Demolition</option>
                                        <option value="Asbestos Removal">Asbestos Removal</option>
                                        <option value="Site Remediation">Site Remediation</option>
                                        <option value="Site Preparation">Site Preparation</option>
                                    </select>
                                </div>
                                <div id="otherFieldGroupDiv">
                                    <div class="form-group">
                                        <label for="otherField1">When Do You Need The Work To Start?</label>
                                        <select class="form-control" id="otherField1" name="start">
                                            <option>Emergency</option>
                                            <option>ASAP, Next Few Days</option>
                                            <option>Next Few Weeks</option>
                                            <option>Im Flexible</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="otherField2">What Is The Scope Of The Job?</label>
                                        <select class="form-control" id="otherField2" name="scope">
                                            <option>Full Building</option>
                                            <option>Part Building</option>
                                            <option>Internal Strip Out</option>
                                            <option>Asbestos Removal</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="otherField3">Do You Have Council Approval For This Job?</label>
                                        <select class="form-control" id="otherField3" name="approval">
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>Not Required</option>
                                            <option>Not Sure Whether Its Needed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comments">Comments</label>
                                    <textarea class="form-control" id="comments" name="comments" rows="6"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button name="submit" type="submit" value="Submit" class="site-button site-btn-effect button-lg">Submit</button>
                                </div>
                                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                            </form>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="contact-info text-white p-tb50">
                                <div class="contact-info-inner bg-dark p-a15">
                                    <div class="section-head text-left">
                                        <h2 class="text-uppercase font-weight-900 m-b5">Contact Info</h2>
                                    </div>
                                    <div class="wt-icon-box-wraper left p-b40">
                                        <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                        <div class="icon-content">
                                            <h5 class="m-t0 font-weight-500">Phone Number</h5>
                                            <a href="tel:1300329600">
                                                <p>1300 329 600</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="wt-icon-box-wraper left p-b40">
                                        <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                        <div class="icon-content">
                                            <h5 class="m-t0 font-weight-500">Email Address</h5>
                                            <a href="mailto:info@gabraelhousedemolition.com.au">
                                                <p>info@gabraelhousedemolition.com.au</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                        <div class="icon-content">
                                            <h5 class="m-t0 font-weight-500">Location</h5>
                                            <p>Sydney, NSW</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
