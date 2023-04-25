<?php
require_once('lib.php');
$title = 'About ' . $siteName;
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
                    <a href="#"> About Us </a>
                </div>
                <h2> About </h2>
                <img src="assets/img/header/head7_rock.png" alt="" class="side-img slide_up_down">
            </div>
        </div>
    </section>
    <!-- ====== end header ====== -->

    <!--Contents-->
    <main class="about-page style-2">

        <!-- ====== start careers-features ====== -->
        <section class="about style-2 section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img img-cover">
                            <img src="img/codeheadafrica-student-with-smartphone.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info px-lg-5">
                            <div class="section-head style-5 mb-40">
                                <h2 class="mb-20"> Work For Your <span> Incredible Success </span> </h2>
                            </div>
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="abt1-tab" data-bs-toggle="pill"
                                        data-bs-target="#abt1" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">
                                        Our Mission
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="abt2-tab" data-bs-toggle="pill" data-bs-target="#abt2"
                                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Our vision
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="abt3-tab" data-bs-toggle="pill" data-bs-target="#abt1"
                                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Our Goal
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="abt1" role="tabpanel">
                                    <p class="text"> The uploading and updating processes made by suppliers can be
                                        streamlined through front-end dashboards that create better ease of access. </p>
                                    <div class="d-flex align-items-center mt-40">
                                        <div class="btns">
                                            <a href="#"
                                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                                <span> Learn More </span>
                                            </a>
                                        </div>
                                        <div class="inf ms-3">
                                            <p class="color-999"> Support Email </p>
                                            <a href="#" class="fw-bold color-000"> info@webmail.com </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="abt2" role="tabpanel">
                                    <p class="text"> The uploading and updating processes made by suppliers can be
                                        streamlined through front-end dashboards that create better ease of access. </p>
                                    <div class="d-flex align-items-center mt-40">
                                        <div class="btns">
                                            <a href="contact"
                                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                                <span> Join Us </span>
                                            </a>
                                        </div>
                                        <div class="inf ms-3">
                                            <p class="color-999"> Support Email </p>
                                            <a href="#" class="fw-bold color-000"> info@<?php print $siteDomain; ?> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/about/about2_pattern_l.png" alt="" class="pattern_l">
            <img src="assets/img/about/about2_pattern_r.png" alt="" class="pattern_r">
        </section>
        <!-- ====== end careers-features ====== -->


        <!-- ====== start timeline ====== -->
        <section class="timeline section-padding bg-gray5">
            <div class="container">
                <div class="section-head text-center mb-70 style-5">
                    <h2 class="mb-20"> Our Journey Just <span> Started </span> </h2>
                    <p>More than 15,000 young Africans to benefit</p>
                </div>
                <div class="timeline-content">
                    <div class="timeline-card">
                        <div class="row justify-content-around align-items-center">
                            <div class="col-lg-4">
                                <div class="card-year text-lg-end wow left_to_right_apperance ">
                                    <h3> 2000 </h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-info wow left_to_right_apperance ">
                                    <h6> Built New Team </h6>
                                    <p> Sass which stands for 'Syntactically awesome style sheet is an extension of that
                                        enables you to use things like variables. </p>
                                    <span class="num"> 01 </span>
                                </div>
                            </div>
                        </div>
                        <div class="line wow"></div>
                    </div>
                    <div class="timeline-card">
                        <div class="row justify-content-around align-items-center">
                            <div class="col-lg-4">
                                <div class="card-info wow left_to_right_apperance">
                                    <h6> Got Design Rewards </h6>
                                    <p> Sass which stands for 'Syntactically awesome style sheet is an extension of that
                                        enables you to use things like variables. </p>
                                    <span class="num"> 02 </span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-year wow left_to_right_apperance ">
                                    <h3> 2005 </h3>
                                </div>
                            </div>
                        </div>
                        <div class="line wow"></div>
                    </div>
                    <div class="timeline-card">
                        <div class="row justify-content-around align-items-center">
                            <div class="col-lg-4">
                                <div class="card-year text-lg-end wow left_to_right_apperance ">
                                    <h3> 2015 </h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-info wow left_to_right_apperance ">
                                    <h6> Best Team In Egypt </h6>
                                    <p> Sass which stands for 'Syntactically awesome style sheet is an extension of that
                                        enables you to use things like variables. </p>
                                    <span class="num"> 03 </span>
                                </div>
                            </div>
                        </div>
                        <div class="line wow"></div>
                    </div>
                    <div class="timeline-card">
                        <div class="row justify-content-around align-items-center">
                            <div class="col-lg-4">
                                <div class="card-info wow left_to_right_apperance ">
                                    <h6> Design Rewards In NYC </h6>
                                    <p> Sass which stands for 'Syntactically awesome style sheet is an extension of that
                                        enables you to use things like variables. </p>
                                    <span class="num"> 04 </span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-year wow left_to_right_apperance ">
                                    <h3> 2018 </h3>
                                </div>
                            </div>
                        </div>
                        <div class="line wow"></div>
                    </div>
                    <div class="timeline-card">
                        <div class="row justify-content-around align-items-center">
                            <div class="col-lg-4">
                                <div class="card-year text-lg-end wow left_to_right_apperance ">
                                    <h3> 2022 </h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-info wow left_to_right_apperance ">
                                    <h6> Featured On Envato </h6>
                                    <p> Sass which stands for 'Syntactically awesome style sheet is an extension of that
                                        enables you to use things like variables. </p>
                                    <span class="num"> 05 </span>
                                </div>
                            </div>
                        </div>
                        <div class="line wow"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end timeline ====== -->

    </main>
    <!--End-Contents-->

    <?php require_once('footer.php'); ?>