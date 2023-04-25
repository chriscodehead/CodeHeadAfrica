<?php
require_once('lib.php');
$title = $siteName . ' | Building a digital Africa';
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
    <?php require_once('header.php'); ?>
    <!-- ====== end header ====== -->

    <!--Contents-->
    <main>


        <!-- ====== start about ====== -->
        <section class="about style-1">
            <div class="container">
                <div class="content">
                    <div
                        class="about-logos d-flex align-items-center justify-content-between border-bottom border-1 brd-light pb-20">
                        <h3 class="text-white">About <?php print $siteName; ?></h3>
                        <!-- <a href="#" class="logo wow fadeInUp" data-wow-delay="0">
                            <img src="assets/img/about/about_logos/1.png" alt="">
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.2s">
                            <img src="assets/img/about/about_logos/2.png" alt="">
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.4s">
                            <img src="assets/img/about/about_logos/3.png" alt="">
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.6s">
                            <img src="assets/img/about/about_logos/4.png" alt="">
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.8s">
                            <img src="assets/img/about/about_logos/5.png" alt="">
                        </a> -->
                    </div>
                    <div class="about-info">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="title">
                                    <h3 class=" wow fadeInUp slow">“Technology is best when it brings people together.”
                                    </h3>
                                    <small class=" wow fadeInUp slow fw-bold">Patricia Cross</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info">
                                    <h6 class=" wow fadeInUp slow"><?php print $siteName;?> is a tech community that is focused on empowering young people who are interested in pursuing a career in the tech industry. Our community is made up of experienced professionals, industry leaders, and enthusiastic beginners who are all passionate about technology and helping others succeed.</h6>
                                    
                                    <a href="about"
                                        class="btn btn-outline-light mt-5 sm-butn wow fadeInUp slow">
                                        <span>more about us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-numbers">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="num-item wow fadeInUp" data-wow-delay="0">
                                    <div class="num">
                                        <span class="counter">
                                            10
                                        </span>
                                        <span>
                                            <i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="inf">
                                        Years 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="num-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="num">
                                        <span class="counter">
                                            15
                                        </span>
                                        <span>
                                            
                                        </span>
                                    </div>
                                    <div class="inf">
                                        Projects completed
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="num-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="num">
                                        <span class="counter">
                                            0
                                        </span>
                                    </div>
                                    <div class="inf">
                                        Awards achievied
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="num-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="num">
                                        <span class="counter">
                                            180
                                        </span>
                                    </div>
                                    <div class="inf">
                                        Satisfied clients on 24 countries
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/about/num_shap.png" alt="" class="about_shap">
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->


        <!-- ====== start services ====== -->
        <section class="services section-padding style-1">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">Resources</h6>
                            <h2 class="wow fadeInUp">
                                Perfect IT Solutions <span class="fw-normal">Resources</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0">
                                <h5>
                                    <a href="page-services-5.html"> IT Consultation </a>
                                    <span class="num">01</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/1.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Strategy</a>
                                        <a href="#">Consultation</a>
                                        <a href="#">Management</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0.2s">
                                <h5>
                                    <a href="page-services-5.html"> Data Security </a>
                                    <span class="num">02</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/2.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Management</a>
                                        <a href="#">Backup & Recovery</a>
                                        <a href="#">Transfer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0.4s">
                                <h5>
                                    <a href="page-services-5.html"> Website Development </a>
                                    <span class="num">03</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/3.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Ecommerce</a>
                                        <a href="#">Landing Page</a>
                                        <a href="#">CMS</a>
                                        <a href="#">Plugin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box mb-4 mb-md-0 wow fadeInUp" data-wow-delay="0">
                                <h5>
                                    <a href="page-services-5.html"> UI/UX Design </a>
                                    <span class="num">04</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/4.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Website</a>
                                        <a href="#">Mobile App</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box mb-4 mb-md-0 wow fadeInUp" data-wow-delay="0.2s">
                                <h5>
                                    <a href="page-services-5.html"> Cloud Services </a>
                                    <span class="num">05</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/5.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Cloud Storerage</a>
                                        <a href="#">Hosting & VPS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                                <h5>
                                    <a href="page-services-5.html"> Game Development </a>
                                    <span class="num">06</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/6.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Unity 2D/3D</a>
                                        <a href="#">VR/AR</a>
                                        <a href="#">iOS & Android</a>
                                        <a href="#">HTC Vive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/services/ser_shap_l.png" alt="" class="ser_shap_l">
            <img src="assets/img/services/ser_shap_r.png" alt="" class="ser_shap_r">
        </section>
        <!-- ====== end services ====== -->


        <!-- ====== start portfolio ====== -->
        <section class="portfolio section-padding bg-gray style-1">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">Support The Movement</h6>
                            <h2 class="wow fadeInUp">
                                Latest Projects <span class="fw-normal"></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="content wow fadeIn slow">
                    <div class="portfolio-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="portfolio-card">
                                        <div class="img">
                                            <img src="assets/img/projects/prog/1.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="page-single-project-5.html"> Infrastructure Upgrade </a>
                                            </h5>
                                            <small class="d-block color-main text-uppercase"><a href="#">IT
                                                    Consultation</a></small>
                                            <div class="text">
                                                Trust our top minds to eliminate workflow pain points, implement new
                                                tech & app.
                                            </div>
                                            <div class="tags">
                                                <a href="#">Consultation</a>
                                                <a href="#">Management</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card">
                                        <div class="img">
                                            <img src="assets/img/projects/prog/2.png" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="page-single-project-5.html"> Criftocy Landing Page </a>
                                            </h5>
                                            <small class="d-block color-main text-uppercase"><a href="#">Website
                                                    Development,</a> <a href="#">UI/UX Design</a></small>
                                            <div class="text">
                                                Trust our top minds to eliminate workflow pain points, implement new
                                                tech & app.
                                            </div>
                                            <div class="tags">
                                                <a href="#">WordPress</a>
                                                <a href="#">PHP</a>
                                                <a href="#">HTML/CSS</a>
                                                <a href="#">Figma</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card">
                                        <div class="img">
                                            <img src="assets/img/projects/prog/3.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="page-single-project-5.html"> AR/VR War 1986 Game </a>
                                            </h5>
                                            <small class="d-block color-main text-uppercase"><a href="#">Game
                                                    Developemnt</a></small>
                                            <div class="text">
                                                Trust our top minds to eliminate workflow pain points, implement new
                                                tech & app.
                                            </div>
                                            <div class="tags">
                                                <a href="#">VR/AR</a>
                                                <a href="#">iOS & Android</a>
                                                <a href="#">Unity 2D/3D</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card">
                                        <div class="img">
                                            <img src="assets/img/projects/prog/2.png" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="page-single-project-5.html"> Criftocy Landing Page </a>
                                            </h5>
                                            <small class="d-block color-main text-uppercase"><a href="#">Website
                                                    Development,</a> <a href="#">UI/UX Design</a></small>
                                            <div class="text">
                                                Trust our top minds to eliminate workflow pain points, implement new
                                                tech & app.
                                            </div>
                                            <div class="tags">
                                                <a href="#">WordPress</a>
                                                <a href="#">PHP</a>
                                                <a href="#">HTML/CSS</a>
                                                <a href="#">Figma</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ====== slider pagination ====== -->
                        <div class="swiper-pagination"></div>

                        <!-- ====== slider navigation ====== -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <img src="assets/img/projects/prog/shap_r.png" alt="" class="shap_r">
            <img src="assets/img/projects/prog/shap_l.png" alt="" class="shap_l">
        </section>
        <!-- ====== end portfolio ====== -->


        <!-- ====== start testimonials ====== -->
        <section class="testimonials section-padding style-1">
            <div class="container">
                <div class="section-head mb-60 text-center">
                    <h6 class="color-main text-uppercase wow fadeInUp">testimonials</h6>
                    <h2 class="wow fadeInUp">
                        The Trust <span class="fw-normal">From The Reach</span>
                    </h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="vid_img mb-2 mb-md-0 wow zoomIn slow">
                                <img src="img/codehead-africa-girl-with-phone.jpg" alt="">
                                <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity class="play_icon">
                                    <i class="bi bi-play"></i>
                                </a>
                                <div class="img_info wow fadeInUp">
                                    <h4><a href="#">Ifunanya Ibeneme</a></h4>
                                    <small><a href="#">Graphics Designer</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="info wow fadeInUp">
                                <div class="client_card mb-2" data-wow-delay="0">
                                    <div class="user_img">
                                        <img src="assets/img/testimonials/user1.jpg" alt="">
                                    </div>
                                    <div class="inf_content">
                                        <div class="rate_stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <h6>
                                            “Iteck provide perfect IT solutions, fast process and affordable price.
                                            We’re really satisfied!”
                                        </h6>
                                        <p>Ibrahima K. <span class="text-muted">/ Senior Marketing at Amazon</span></p>
                                    </div>
                                </div>
                                <div class="client_card mb-2" data-wow-delay="0.2s">
                                    <div class="user_img">
                                        <img src="assets/img/testimonials/user2.jpg" alt="">
                                    </div>
                                    <div class="inf_content">
                                        <div class="rate_stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <h6>
                                            “Iteck - 1st my choice for cloud services method”
                                        </h6>
                                        <p> Ben S. <span class="text-muted">/ CEO at ThemesCamp</span></p>
                                    </div>
                                </div>
                                <div class="client_card" data-wow-delay="0.4s">
                                    <div class="user_img">
                                        <img src="assets/img/testimonials/user3.jpg" alt="">
                                    </div>
                                    <div class="inf_content">
                                        <div class="rate_stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <h6>
                                            “Our profit increased so much. Really Awesome!”
                                        </h6>
                                        <p>Alexander A. <span class="text-muted">/ Tech Leader of Traveloka</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end testimonials ====== -->

        <!-- ====== start team ====== -->
        <section class="team section-padding pt-0 style-1">
            <div class="container">
                <div class="section-head mb-60 text-center">
                    <h6 class="color-main text-uppercase wow fadeInUp">meet our expert</h6>
                    <h2 class="wow fadeInUp">
                        Clients Satisfaction, <span class="fw-normal">Our Reputation</span>
                    </h2>
                </div>
                <div class="content">
                    <div class="team_box wow fadeInUp" data-wow-delay="0">
                        <div class="avatar">
                            <img src="assets/img/team/1.jpg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Michael Edwards</a></h6>
                            <small>CEO Founder</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="avatar">
                            <img src="assets/img/team/2.jpg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Bobby Kane</a></h6>
                            <small>CTO</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="avatar">
                            <img src="assets/img/team/3.jpg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Robert Downey Jr</a></h6>
                            <small>Project Manager</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="avatar">
                            <img src="assets/img/team/4.jpg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Andrew Robertson</a></h6>
                            <small>Marketing Leader</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="avatar">
                            <img src="assets/img/team/5.jpg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Alexander Avery</a></h6>
                            <small>Creative Director</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bttns mt-4 text-center">
                    <a href="page-about-5.html" class="btn btn-dark wow zoomIn">
                        <span>See All Team</span>
                    </a>
                    <a href="page-contact-5.html" class="btn butn-gard border-0 text-white wow zoomIn">
                        <span>Join Our Team</span>
                    </a>
                </div>
            </div>
            <img src="assets/img/team/team_shap.png" alt="" class="team_shap">
        </section>
        <!-- ====== end team ====== -->

        <!-- ====== start blog ====== -->
        <section class="blog section-padding bg-gray style-1">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">our press</h6>
                            <h2 class="wow fadeInUp">
                                Latest Posts <span class="fw-normal">From Our Press</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="blog_slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">news</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/1.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">Crypto Trends 2023</a></h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user1.jpg"
                                                        alt="">
                                                    <small><a href="#">By Admin</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2022</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">technology</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/2.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">How To Become Web Developer</a></h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user2.jpg"
                                                        alt="">
                                                    <small><a href="#">By Moussa</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2022</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">tips & tricks</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/3.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">Wireframe For UI/UX?</a></h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user3.jpg"
                                                        alt="">
                                                    <small><a href="#">By Admin</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2022</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">news</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/4.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">VR Game, Opportunity & Challenge</a>
                                            </h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user1.jpg"
                                                        alt="">
                                                    <small><a href="#">By David</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2022</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">technology</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/2.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">How To Become Web Developer</a></h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user2.jpg"
                                                        alt="">
                                                    <small><a href="#">By Moussa</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2022</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ====== slider navigation ====== -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end blog ====== -->


        <!-- ====== start contact ====== -->
        <section class="contact section-padding bg-gradient style-1">
            <div class="container">
                <div class="section-head mb-60 text-center">
                    <h6 class="text-white text-uppercase wow fadeInUp">contact us</h6>
                    <h2 class="wow fadeInUp text-white">
                        Request Free <span class="fw-normal">Consultancy</span>
                    </h2>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="contact_info text-white">
                                <p class="wow fadeInUp">Hotline 24/7</p>
                                <h4 class="wow fadeInUp">(+23) 5535 68 68</h4>
                                <ul>
                                    <li class="wow fadeInUp">
                                        <strong>Address : </strong> 58 Howard Street, San Francisco, CA 941
                                    </li>
                                    <li class="wow fadeInUp">
                                        <strong>Email : </strong> contact@Iteck.co
                                    </li>
                                    <li class="wow fadeInUp">
                                        <strong>Fax : </strong> fax@Iteck.co
                                    </li>
                                    <li class="wow fadeInUp">
                                        <strong>Work Hour : </strong> Mon - Sat: 9:00 - 18:00
                                    </li>
                                </ul>
                                <a href="#" class="wow fadeInUp">get direction</a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <form class="contact_form" action="https://smartinnovates.com/items/iteck/html/contact.php"
                                method="post">
                                <div class="row gx-3">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <input type="text" name="name" class="form-control" placeholder="name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <select name="option" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>Your inquiry about</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <textarea class="form-control" rows="4"
                                                placeholder="Write your inquiry here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check mb-4 wow fadeInUp">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label text-light small" for="flexCheckDefault">
                                                By submitting, i’m agreed to the <a href="#"
                                                    class="text-decoration-underline">Terms & Conditons</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Request Now"
                                            class="btn btn-dark wow fadeInUp text-light fs-14px">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/contact_globe.svg" alt="" class="contact_globe">
        </section>
        <!-- ====== end contact ====== -->
    </main>
    <!--End-Contents-->

    <?php require_once('footer.php'); ?>