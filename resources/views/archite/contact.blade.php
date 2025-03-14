<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:59 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Contact</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('archite/img/favicon.ico') }}">
    <!-- Fonts (google font) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&amp;family=Tajawal:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <!-- Font awesome Stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/all.min.css') }}">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/bootstrap.min.css') }}">
    <!-- Owl Carousel stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/owl.carousel.css') }}">
    <!-- Modal Video stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/modal-video.min.css') }}">
    <!-- Owl theme stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/owl.theme.default.min.css') }}">
    <!-- AOS stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/aos.css') }}">
    <!-- Animated heading stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/jquery.animatedheadline.css') }}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('archite/css/normalize.css') }}">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('archite/css/responsive.css') }}">
</head>

<body>
    <main>
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header position-absolute top-0 left-0 w-100 z-3 home-three-header pt-35">
            <div class="container">
                <nav class="nav nav-secondary d-flex align-items-center justify-content-between">
                    <!-- logo -->
                    <div class="logo-container">
                        <img class="header-logo" src="{{ asset('archite/img/LogoTwo.png') }}" alt="logo">
                    </div>
                    <div class="nav-menu d-flex align-items-center">
                        <ul
                            class="header-menu d-none d-lg-flex flex-row align-items-center z-1 position-relative mr-35 menu">
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="index-2">Home</a>
                                <ul class="submenu-container">
                                    <li><a class="submenu-link text-uppercase fw-500" href="index-2">Home
                                            1</a></li>
                                    <li><a class="submenu-link text-uppercase fw-500" href="index2">Home
                                            2</a></li>
                                    <li><a class="submenu-link text-uppercase fw-500" href="index3">Home
                                            3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="about">About Us</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="services">Services</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="portfolio">Portfolio</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="blog">Blog</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="contact">Contact Us</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="index-2">Pages</a>
                                <ul class="submenu-container">
                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="blogDetails">Blog
                                            Details</a>
                                    </li>

                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="portfolioDetails">Portfolio
                                            Details</a>
                                    </li>

                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="servicesDetails">Services
                                            Details</a>
                                    </li>
                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="team">Team</a>
                                    </li>
                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="teamDetails">Team
                                            Details</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="desktop-menu-offcanvas position-relative">
                            <img class="off-canvas-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight" src="{{ asset('archite/img/menuToggleIvonTwo.png') }}"
                                alt="menu toggle icon">
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <img id="offcanvasRightLabel" class="header-logo offcanvas-title img-fluid"
                                        src="{{ asset('archite/img/LogoTwo.png') }}" alt="logo">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="accordion-menu">
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">Home</span>
                                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </div>
                                            <ul class="submenuItems">
                                                <li><a class="submenu-link text-uppercase fw-500" href="index-2">Home
                                                        1</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500" href="index2">Home
                                                        2</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500" href="index3">Home
                                                        3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="about">About Us</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="services">Services</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="portfolio">Portfolio</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="blog">Blog</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">Pages</span>
                                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </div>
                                            <ul class="submenuItems">


                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="servicesDetails">Services Details</a></li>

                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="portfolioDetails">Portfolio Details</a></li>

                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="blogDetails">Blog Details</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="team">Taem</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500"
                                                        href="teamDetails">Team Details</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="contact">Contact Us</a>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header -->
        <!-- start inner page banner-->
        <section class="inner-page-banner section-padding-bottom-xl section-padding-top-xl">
            <div class="container">
                <div class="inner-page-banner-wrapper d-flex justify-content-center align-items-center">
                    <h2 class="h2 dark-text fw-700 line-height-3 text-center">
                        Contact With Us
                    </h2>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- start contact -->
        <section class="contact section-padding-bottom-xl section-padding-top-xl overflow-hidden">
            <div class="contact-container">
                <div class="contact-wrapper">
                    <div class="row">
                        <div data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="0"
                            class="col-12 col-lg-6">
                            <div class="row gy-5 gy-lg-0">
                                <div class="col-12 col-sm-4 count-one-border-responsive position-relative">
                                    <div class="contact-info-wrapper">
                                        <div
                                            class="contact-info-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-location-dot dark-text d-inline-block"></i>
                                        </div>
                                        <h4 class="dark-text fw-700 line-height-3 ">Address</h4>
                                        <p class="p body-text fw-500 line-height-5">
                                            901 N Pitt Str., Suite 170
                                            Alexandria, NY, USA
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 count-one-border-responsive position-relative">
                                    <div class="contact-info-wrapper">
                                        <div
                                            class="contact-info-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-phone-volume dark-text d-inline-block"></i>
                                        </div>
                                        <h4 class="dark-text fw-700 line-height-3 ">Phone</h4>
                                        <p class="p body-text fw-500 line-height-5">
                                            <a class="body-text" href="tel:(406) 555-0120">(406) 555-0120</a><br>
                                            <a class="body-text" href="tel:(406) 555-0120">(406) 555-0120</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 position-relative">
                                    <div class="contact-info-wrapper">
                                        <div
                                            class="contact-info-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-envelope dark-text d-inline-block"></i>
                                        </div>
                                        <h4 class="dark-text fw-700 line-height-3 ">Email</h4>
                                        <p class="p body-text fw-500 line-height-5">
                                            <a class="body-text" href="mailto:archite@email.com">archite@email.com</a>
                                            <a class="body-text" href="mailto:hello@archite.com">hello@archite.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-100">
                                <h4 class="contact-form-heading fw-700 line-height-3 dark-text mb-70">Drop Us a Message
                                </h4>
                                <form class="contact-page-form">
                                    <div class="row mb-50">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Messages" rows="3"></textarea>
                                    <a class="btn brand-btn text-uppercase d-inline-block mt-60" href="contact">
                                        <span class="position-relative z-1">send messages</span>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-end d-none d-lg-flex">
                            <div class="w-100">
                                <img src="{{ asset('archite/img/experienceOneImg.jpg') }}"
                                    class="img-no-hover-effect" alt="contact img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact -->
        <!-- start map -->
        <div class="contact-location-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387194.0622843894!2d-74.30932844391303!3d40.69701928424492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1683321107064!5m2!1sen!2sbd"
                width="100" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <!-- end map -->
        <!-- start footer -->
        <footer class="footer-one">
            <div class="container">
                <div class="footer-one-wrapper">
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <div class="logo mb-1">
                                <img src="{{ asset('archite/img/Logo.png') }}" alt="logo">
                            </div>
                            <p class="p text-white fw-500 line-height-5 mt-15">
                                Welcome to our interior design agency! Our team of experienced designers and decorators
                                is passionate about creating beautiful, functional spaces that enhance our clients'
                                lives. Welcome to our interior design agency!
                            </p>
                            <h2 class="fw-700 text-white mt-30 footer-email">info@email.com</h2>
                        </div>
                        <div class="col-12 col-sm-3 mt-5 mt-sm-0">
                            <ul class="d-flex flex-column gap-4">
                                <li><a class="fw-500 text-uppercase" href="index-2">home</a></li>
                                <li><a class="fw-500 text-uppercase" href="about">about</a></li>
                                <li><a class="fw-500 text-uppercase" href="services">services</a></li>
                                <li><a class="fw-500 text-uppercase" href="portfolio">portfolio</a></li>
                                <li><a class="fw-500 text-uppercase" href="blog">blog</a></li>
                                <li><a class="fw-500 text-uppercase" href="contact">contact us</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-4 mt-5 mt-sm-0">
                            <div class="d-flex align-items-start mb-30">
                                <i class="fa-solid fa-location-dot brand-text d-inline-block mr-10 mt-2"></i>
                                <h6 class="h6 fw-400 line-height-4 footer-address">
                                    901 N Pitt Str., Suite 170
                                    Alexandria, NY, USA
                                </h6>
                            </div>
                            <div class="d-flex align-items-start mb-30">
                                <i class="fa-solid fa-phone-volume brand-text d-inline-block mr-10 mt-2"></i>
                                <h6 class="h6 fw-400 line-height-4 footer-address">
                                    (406) 555-0120
                                </h6>
                            </div>
                            <div class="d-flex align-items-start mb-30">
                                <i class="fa-solid fa-phone-volume brand-text d-inline-block mr-10 mt-2"></i>
                                <h6 class="h6 fw-400 line-height-4 footer-address">
                                    (406) 327-1246
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="mt-100 d-flex justify-content-between align-items-center flex-column flex-xl-row">
                        <div class="footer-one-social-container">
                            <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://facebook.com/"><span
                                    class="z-1 position-relative">Facebook</span></a>
                            <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://linkedin.com/"><span
                                    class="z-1 position-relative">LinkedIn</span></a>
                            <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://instagram.com/"><span
                                    class="z-1 position-relative">Instagram</span></a>
                            <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://twitter.com/"><span
                                    class="z-1 position-relative">Twitter</span></a>
                            <a class="btn dark-btn mb-4 mb-lg-0" href="https://dribble.com/"><span
                                    class="z-1 position-relative">Dribble</span></a>
                        </div>
                        <p class="p fw-500 line-height-3 footer-copyright-text pt-4 pt-xl-0">
                            Copyright 2023, All Right reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </main>

    <!-- Jquery script -->
    <script src="{{ asset('archite/js/jquery-3.6.4.min.js') }}"></script>
    <!-- Bootstrap Script -->
    <script src="{{ asset('archite/js/bootstrap.min.js') }}"></script>
    <!-- Font awesome script -->
    <script src="{{ asset('archite/js/all.min.js') }}"></script>
    <!-- Modal video script -->
    <script src="{{ asset('archite/js/jquery-modal-video.min.js') }}"></script>
    <!-- Owl carousel script -->
    <script src="{{ asset('archite/js/owl.carousel.min.js') }}"></script>
    <!-- AOS script -->
    <script src="{{ asset('archite/js/aos.js') }}"></script>
    <!-- jQuery Counterup -->
    <script src="{{ asset('archite/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('archite/js/jquery.counterup.min.js') }}"></script>
    <!-- Preloader script -->
    <script src="{{ asset('archite/js/jquery.preloader.min.js') }}"></script>
    <!-- Jquery viewport checker script -->
    <script src="{{ asset('archite/js/jquery.viewportchecker.min.js') }}"></script>
    <!-- textyle script -->
    <script src="{{ asset('archite/js/textyle.min.js') }}"></script>
    <!-- animated headline script -->
    <script src="{{ asset('archite/js/jquery.animatedheadline.min.js') }}"></script>
    <!-- Main JS script -->
    <script src="{{ asset('archite/js/main.js') }}"></script>
</body>


<!-- Mirrored from thememarch.com/demo/html/archite/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:28:59 GMT -->

</html>
