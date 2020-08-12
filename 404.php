<?php require 'config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>404 - Gabrael House Demolition</title>
    <meta name="description" content="About Us - At Gabrael House Demolition our aim is to provide our customers with the best service possible at a competitive market price. Get A Free Quote!" />
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
                            <h1 class="font-weight-900">Page Not Found</h1>
                        </div>
                    </div>
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="/index.php">Home</a></li>
                            <li>Page Not Found</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-full p-tb80 text-center">
            <div class="container">
                <div class="row">
                    <h2>Unfortunately The Page You Were Looking For, Couldn't Be Found</h2>
                    <a href="/index.php" class="site-button site-btn-effect button-lg"><span>Go To Homepage</span></a>
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