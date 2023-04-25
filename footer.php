<!-- ====== start footer ====== -->
<footer class="style-1">
    <div class="container">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="foot_info">
                        <a href="./" class="logo mb-3">
                            <img src="img/logo-blue.png" width="200" alt="">
                        </a>
                        <div class="text mb-4">
                            Best IT Solutions & Technology WordPress <br> Theme for Your Busines
                        </div>
                        <ul class="mb-4">
                            <li class="d-flex">
                                <i class="bi bi-house me-3"></i>
                                <a href="#">
                                    <span><?php print $siteAddress;?></span>
                                </a>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-envelope me-3"></i>
                                <a href="#">
                                    <span>contact@<?php print $siteDomain; ?></span>
                                </a>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-phone me-3"></i>
                                <a href="tel:<?php print $sitePhone; ?>">
                                    <span><?php print $sitePhone; ?></span>
                                </a>
                            </li>
                        </ul>
                        <div class="social_icons">
                            <a href="<?php print $siteTwitter; ?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="<?php print $siteFacebook; ?>">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="<?php print $siteLinkedin; ?>">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="<?php print $siteInstagram; ?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="<?php print $siteYoutube; ?>">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="links">
                        <div class="cont">
                            <h6 class="link_title">
                                Resources
                            </h6>
                            <ul>
                                <li>
                                    <a href="#">IT Consultations </a>
                                </li>
                                <li>
                                    <a href="#">Data Security </a>
                                </li>
                                <li>
                                    <a href="#">Website Development </a>
                                </li>
                                <li>
                                    <a href="#">UI/UX Design </a>
                                </li>
                                <li>
                                    <a href="#">Cloud Services </a>
                                </li>
                                <li>
                                    <a href="#">Game Development </a>
                                </li>
                                <li>
                                    <a href="#">CRM & Software </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="links">
                        <div class="cont">
                            <h6 class="link_title">
                                Information
                            </h6>
                            <ul>
                                <li>
                                    <a href="about">About </a>
                                </li>
                                <li>
                                    <a href="blog">Blog </a>
                                </li>
                                <li>
                                    <a href="career">Career </a>
                                </li>
                                <li>
                                    <a href="contact">Contact </a>
                                </li>
                                <li>
                                    <a href="faq">FAQs </a>
                                </li>
                                <li>
                                    <a href="projects">Projects </a>
                                </li>
                                <li>
                                    <a href="community">Community </a>
                                </li>
                                <li>
                                    <a href="volunteers">Volunteers </a>
                                </li>
                                <li>
                                    <a href="donate">Donate </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="foot_subscribe">
                        <h6 class="link_title">
                            Donate
                        </h6>
                        <p>
                            You don't just give money to us; you act as a catalyst for the development of the African IT
                            talent pool.
                        </p>
                        <a href="donate">
                            <div class="input-group my-4">

                                <button class="btn butn-gard border-0 text-white px-3" type="button" id="button-addon2">
                                    <span>Become a Catalyst</span>
                                </button>
                            </div>
                        </a>
                        <p class="fst-italic">Join The Movement <a href="donate" class="text-decoration-underline">
                                Let's Build A Digital Africa</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="foot">
                    <p>
                        © 2022 - <?php $d = date('Y');
                                    print $d; ?> Copyright <a href="./"
                            class="text-white text-decoration-underline"><?php print $siteDomain; ?>.</a>
                        All Rights Reserved <a href="terms" class="text-white text-decoration-underline"> Terms</a> | <a
                            href="policy" class="text-white text-decoration-underline"> Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <img src="assets/img/footer/foot_l.png" alt="" class="foot_l">
    <img src="assets/img/footer/foot_r.png" alt="" class="foot_r">
</footer>
<!-- ====== end footer ====== -->


<!-- ====== start to top button ====== -->
<a href="#" class="to_top">
    <i class="bi bi-chevron-up"></i>
    <small>top</small>
</a>

<script src="assets/js/lib/jquery-3.0.0.min.js"></script>
<script src="assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
<script src="assets/js/lib/wow.min.js"></script>
<script src="assets/js/lib/jquery.fancybox.js"></script>
<script src="assets/js/lib/lity.js"></script>
<script src="assets/js/lib/swiper.min.js"></script>
<script src="assets/js/lib/jquery.waypoints.min.js"></script>
<script src="assets/js/lib/jquery.counterup.js"></script>
<script src="assets/js/lib/pace.js"></script>
<script src="assets/js/lib/scrollIt.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>