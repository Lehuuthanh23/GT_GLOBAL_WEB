<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememarch.com/demo/html/archite/servicesDetails.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:29:01 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Service Details</title>
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
    <main class="service-details-page">
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
                                <a class="menu-link text-uppercase fw-500" href="index">Trang chủ</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="about">Giới thiệu</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="services">Dịch vụ</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="portfolio">Dự án</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="blog">Tin tức</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="contact">Liên hệ</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="recruitment">Tuyển dụng</a>

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
                                    <div class="offcanvas-body">
                                        <ul class="accordion-menu">
                                            <li>
                                                <div class="dropdownlink">
                                                    <span class="text-uppercase">
                                                        <a href="index">Trang chủ</a>
                                                    </span>

                                                </div>

                                            </li>
                                            <li>
                                                <div class="dropdownlink">
                                                    <span class="text-uppercase">
                                                        <a href="about">Giới thiệu</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdownlink">
                                                    <span class="text-uppercase">
                                                        <a href="portfolio">Dự án</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdownlink">
                                                    <span class="text-uppercase">
                                                        <a href="blog">Tin tức</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdownlink">
                                                    <span class="text-uppercase">
                                                        <a href="recruitment">Tuyển dụng</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdownlink">
                                                    <span class="text-uppercase">
                                                        <a href="contact">Liên hệ</a>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
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
                        Architecture Interior Design <br>Services
                    </h2>
                </div>
            </div>
        </section>
        <!-- end inner page banner-->
        <!-- start service details info -->
        <section class="service-details-info section-padding-top-xl section-padding-bottom">
            <div class="container">
                <div class="details-info-wrapper">
                    <div class="row align-items-center mb-100 services-details-info-top">
                        <div class="col-12 col-lg-6">
                            <h5 class="h5 dark-text fw-700 line-height-3">
                                Architecture Interior Design <br>Services
                            </h5>
                            <p class="body-text-two fw-500 line-height-5 mt-20 services-details-info-top-paragraph">
                                Welcome to our interior design agency! Our team of experienced designers and
                                decorators
                                is
                                passionate about creating beautiful, functional spaces that enhance our client's
                                lives.
                            </p>
                        </div>
                        <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                            <div class="row mb-4 align-items-center">
                                <div class="col-6 col-sm-8">
                                    <h6 class="h6 fw-400 body-text line-height-3">
                                        We Take Time:
                                    </h6>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <h6 class="h6 fw-700 dark-text line-height-3">
                                        Upto 7 Days
                                    </h6>
                                </div>
                            </div>
                            <div class="service-details-divider"></div>
                            <div class="row mt-4 align-items-center">
                                <div class="col-6 col-sm-8">
                                    <h6 class="h6 fw-400 body-text line-height-3">
                                        Customer Support:
                                    </h6>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <h6 class="h6 fw-700 dark-text line-height-3">
                                        6 Months
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="{{ asset('archite/img/serviceDetailsImg.jpg') }}" class="img-fluid mb-50"
                                alt="service details image">
                        </div>
                        <p class="body-text fw-500 line-height-5 mt-20">
                            Aechitecture are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend to repeat predefined chunks as necessary, making this the
                            first true generator.
                        </p>
                        <p class="body-text fw-500 line-height-5 mt-25">
                            Interior on the Internet. It uses a dictionary of over 200 Latin words, combined with a
                            handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
                            generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                            non-characteristic words etc.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end service details info -->
        <!-- start service working process -->
        <section class="service-work-process section-padding-bottom section-padding-top">
            <div class="container">
                <div class="service-work-process-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-xl-6">
                            <h2 class="h2 fw-700 line-height-3 dark-text">
                                Our Dedicated Working <br>Process
                            </h2>
                        </div>
                        <div class="col-12 col-xl-6">
                            <p
                                class="body-text-two fw-500 line-height-5 ps-0 ps-xl-5 pt-4 pt-xl-0 service-process-top-paragraph">
                                Welcome to our interior design agency! Our team of experienced designers and decorators
                                is passionate about creating beautiful, functional spaces that enhance our clients'
                                lives.
                            </p>
                        </div>
                    </div>
                    <div class="row gy-5 mt-75 gy-sm-0 process-items">
                        <div class="col-12 col-sm-4 feature-one-box mb-0 mb-lg-5">
                            <p class="brand-text fw-700 feature-one-number-top">01</p>
                            <h5 class="h5 dark-text fw-700 line-height-3">
                                Creativity
                            </h5>
                            <p class="body-text-two fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                Welcome to our interior design agency! Our team of experienced designers.
                            </p>
                        </div>
                        <div class="col-12 col-sm-4 feature-one-box mt-0 mt-lg-5">
                            <p class="brand-text fw-700 feature-one-number-top">02</p>
                            <h5 class="h5 dark-text fw-700 line-height-3">
                                Project Management
                            </h5>
                            <p class="body-text-two fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                Welcome to our interior design agency! Our team of experienced designers.
                            </p>
                        </div>
                        <div class="col-12 col-sm-4 feature-one-box mb-0 mb-lg-5">
                            <p class="brand-text fw-700 feature-one-number-top">03</p>
                            <h5 class="h5 dark-text fw-700 line-height-3">
                                Space Planning
                            </h5>
                            <p class="body-text-two fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                Welcome to our interior design agency! Our team of experienced designers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end service working process -->
        <!-- start service details extra info -->
        <div class="service-extra-info section-padding-top section-padding-bottom">
            <div class="container">
                <div class="service-extra-info-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-xl-4 d-none d-xl-inline-block">
                            <div class="hover-img-container">
                                <img class="img-fluid" src="{{ asset('archite/img/serviceExtra.jpg') }}"
                                    alt="service details extra image">
                            </div>
                        </div>
                        <div class="col-12 col-xl-8 mt-5 mt-lg-0">
                            <p
                                class="body-text fw-500 line-height-5 ps-0 ps-xl-5 mb-70 service-extra-info-paragrapg-top">
                                Aechitecture are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form, by injected humour, or randomised words which
                                don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                                you need to be sure there isn't anything embarrassing hidden in the middle of text. All
                                the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                necessary, making this the first true generator
                            </p>
                            <p class="body-text fw-500 line-height-5 ps-0 ps-xl-5">
                                Aechitecture are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form, by injected humour, or randomised words which
                                don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                                you need to be sure there isn't anything embarrassing hidden in the middle of text. All
                                the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                necessary, making this the first true generator
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end service details extra info -->
        <!-- start service details faq -->
        <section class="service-details-faq section-padding-top section-padding-bottom-xl">
            <div class="container">
                <div class="service-details-faq-wrapper">
                    <h2 class="h2 dark-text fw-700 line-height-3 mb-60">
                        Frequently Asked Questions
                    </h2>
                    <div class="row flex-column-reverse flex-sm-row">
                        <div class="col-12 col-xl-6 mt-5 mt-sm-0">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            What services does an architecture agency offer?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            How do I choose the right architecture?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseThree">
                                            How much does it cost to hire an architecture?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFour">
                                            How long does it take to complete a project ?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFive">
                                            What is the design process for a project?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed dark-text fw-700 accordion-item-heading"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseSix">
                                            How involved do I need to be in the design process?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p class="p fw-500 line-height-5 body-text">
                                                Architecture nor again is there anyone who loves or pursues or desires
                                                to obtain
                                                pain of itself, because it is pain, but because occasionally
                                                circumstances occur
                                                in which and pain can procure him some great pleasure. To take a trivial
                                                example, which of us ever undertakes laborious physical exercise, except
                                                to
                                                obtain advantage from it? But who has any right to find fault with a man
                                                who
                                                chooses to enjoy a pleasure that has no annoying conse quences lalin
                                                karar or
                                                one as avoids a pain that produces no resultant pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 text-center text-sm-end justify-content-end d-none d-xl-flex">
                            <div class="hover-img-container">
                                <img src="{{ asset('archite/img/serviceDetailsFAQ.jpg') }}" class="img-fluid"
                                    alt="services FAQ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end service details faq -->
        <!-- start work together -->
        <section class="work-together ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="d-flex align-items-center justify-content-center flex-column work-together-content-wrapper">
                            <p class="p text-white fw-500 line-height-3 mb-10">
                                Let’s Work Together
                            </p>
                            <h2 class="h2 fw-700 line-height-3 text-white text-center">Let's Create Your Dream Space
                                Together!</h2>
                            <a href="contact.html" class="btn brand-btn text-uppercase mt-50 border-0"><span
                                    class="z-1 position-relative">let's build</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end work together -->
        <!-- start footer -->
        <footer class="footer-one">
            <div class="container">
                <div class="footer-one-wrapper">
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <div class="logo mb-1">
                                <img src="{{ asset('archite/img/Logo.png') }}" style="height: 30%; width: 30%;"
                                    alt="logo">
                            </div>
                            <p class="p text-white fw-500 line-height-5 mt-15">
                                Welcome to our interior design agency! Our team of experienced designers and decorators
                                is passionate about creating beautiful, functional spaces that enhance our clients'
                                lives. Welcome to our interior design agency!
                            </p>
                            <h2 class="fw-700 text-white mt-30 footer-email">dongtrieuarc@gmail.com</h2>
                        </div>
                        <div class="col-12 col-sm-3 mt-5 mt-sm-0">
                            <ul class="d-flex flex-column gap-4">
                                <li><a class="fw-500 text-uppercase" href="index-2">home</a></li>
                                <li><a class="fw-500 text-uppercase" href="about">Giới thiệu</a></li>

                                <li><a class="fw-500 text-uppercase" href="portfolio">Dự án</a></li>
                                <li><a class="fw-500 text-uppercase" href="blog">Tin tức</a></li>
                                <li><a class="fw-500 text-uppercase" href="contact">Liên hệ</a></li>
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
                                    0907 859 668
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
                            Copyright 2025, All Right reserved
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


<!-- Mirrored from thememarch.com/demo/html/archite/servicesDetails.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 07:29:02 GMT -->

</html>
