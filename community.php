<?php
require_once('lib.php');
$title = 'Our Community ' . $siteName;
$description = '';
$keyword = '';
require_once('head.php'); ?>

<body>
    <?php require_once('top-nav.php'); ?>
    <!-- ====== end top navbar ====== -->

    <!-- ====== start navbar ====== -->
    <?php require_once('nav.php'); ?>
    <!-- ====== end navbar ====== -->

    <!-- ====== start header ====== -->
    <section class="inner-header style-5">
        <div class="container">
            <div class="content">
                <div class="links">
                    <a href="./"> Home </a>
                    <a href="#"> Our Community </a>
                </div>
                <h2> Our Community </h2>
                <img src="assets/img/header/head7_rock.png" alt="" class="side-img slide_up_down">
            </div>
        </div>
    </section>
    <!-- ====== end header ====== -->

    <!--Contents-->
    <main class="services-page style-5">

        <!-- ====== start services ====== -->
        <section class="services section-padding bg-white pb-50 style-6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-60 style-5">
                            <h2 class="mb-20"> Our Top <span> Services </span> </h2>
                            <p>
                                Iteck Dashboard is a powerhouse when it comes to the feature list. This ensures you have
                                every functionality you need to build, run, and expand your marketplace
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="services-slider position-relative style-6">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/img/icons/serv_icons/16.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Content Strategy</h5>
                                        <div class="text">
                                            You can provide the answers that your potential customers are trying to
                                            find, so you can become the industry.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/img/icons/serv_icons/15.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Google/FB Ads</h5>
                                        <div class="text">
                                            Get more website traffic, more customers & more online visibility with
                                            powerful SEO services.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/img/icons/serv_icons/14.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Email Marketing</h5>
                                        <div class="text">
                                            Your website has to impress your visitors within just a few seconds
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/img/icons/serv_icons/17.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Social Media</h5>
                                        <div class="text">
                                            Get more website traffic, more customers for your social chanel
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/img/icons/serv_icons/18.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Website Design and Development</h5>
                                        <div class="text">
                                            Your website has to impress your visitors within just a few seconds. If it
                                            runs slow, if it feels outdated
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/img/icons/serv_icons/19.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>TVC/ Viral Clip</h5>
                                        <div class="text">
                                            Optimized your website on google result with PPC Marketing
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/img/icons/serv_icons/20.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>PPC Ads</h5>
                                        <div class="text">
                                            Optimized your website on google result with PPC Marketing
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end services ====== -->

    </main>
    <!--End-Contents-->

    <?php require_once('footer.php'); ?>