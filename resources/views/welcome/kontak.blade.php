<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('welcome.components.header')

<body>
    <!--[if lte IE 9]>
          <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
          </p>
        <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="/template_home/assets/images/logo/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="{{ url('/') }}">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="{{ url('/lacak') }}">Lacak Berkas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Tentang Kami</a>
                                        <ul class="sub-menu collapse" id="submenu-1-1">
                                            <li class="nav-item"><a href="{{ url('/sekilas') }}">Sekilas</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ url('/visi-misi') }}">Visi&Misi</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Struktur Organisasi</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed active" href="{{ url('/kontak') }}">Kontak Kami</a>
                                    </li>
                            </div> <!-- navbar collapse -->
                            @if (Route::has('login'))
                                <div class="login-button">
                                    <ul>
                                        @auth
                                            <li>
                                                <a href="{{ url('/dashboard') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('login') }}"><i class="lni lni-enter"></i>Masuk</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}"><i class="lni lni-user"></i>
                                                        Daftar</a>
                                                </li>
                                            @endif
                                        @endauth
                                    </ul>
                                </div>
                            @endif
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Tentang Kami</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="/">Beranda</a></li>
                        <li>Tentang Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section class="about-us section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-12 col-12  mb-4">
                    <div class="content-left wow fadeInLeft" data-wow-delay=".3s">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qaUGFmlvM3c"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-12">
                    <!-- content-1 start -->
                    <div class="row w-100">
                        <div class="col-lg-6 my-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.488063317815!2d124.33101979999999!3d0.7372080999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327e23d4820f6f51%3A0xbdb1d43ddeeb7a23!2sAtr%20Bpn%20Kota%20Kotamobagu!5e0!3m2!1sid!2sid!4v1667480277344!5m2!1sid!2sid"
                                class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>

                        </div>
                        <div class="col-lg-6 my-4 d-flex align-items-center">
                            <div>
                                <h6>Alamat</h6>
                                <p>Jl. Kol. Soegiono No. 125, Kel. Kotobangon, Kec. Kotamobagu Timur – Kota Kotamobagu
                                    95712</p>
                                <br>
                                <h6>Kontak</h6>
                                <p>Telp. 0822 6610 5236</p>
                                <p>Email: bpn_kk@yahoo.co.id / kot-kotamobagu@bpn.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer mobile-app">
                            <h3>Mobile Apps</h3>
                            <div class="app-button">
                                <a href="javascript:void(0)" class="btn">
                                    <i class="lni lni-play-store"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        Google Play
                                    </span>
                                </a>
                                <a href="javascript:void(0)" class="btn">
                                    <i class="lni lni-apple"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        App Store
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Locations</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)">Chicago</a></li>
                                        <li><a href="javascript:void(0)">New York City</a></li>
                                        <li><a href="javascript:void(0)">San Francisco</a></li>
                                        <li><a href="javascript:void(0)">Washington</a></li>
                                        <li><a href="javascript:void(0)">Boston</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)">Los Angeles</a></li>
                                        <li><a href="javascript:void(0)">Seattle</a></li>
                                        <li><a href="javascript:void(0)">Las Vegas</a></li>
                                        <li><a href="javascript:void(0)">San Diego</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">How It's Works</a></li>
                                <li><a href="javascript:void(0)">Login</a></li>
                                <li><a href="javascript:void(0)">Signup</a></li>
                                <li><a href="javascript:void(0)">Help & Support</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-contact">
                            <h3>Contact</h3>
                            <ul>
                                <li>23 New Design Str, Lorem Upsum 10<br> Hudson Yards, USA</li>
                                <li>Tel. +(123) 1800-567-8990 <br> Mail. support@classigrids.com</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <ul class="footer-bottom-links">
                                    <li><a href="javascript:void(0)">Terms of use</a></li>
                                    <li><a href="javascript:void(0)"> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)">Advanced Search</a></li>
                                    <li><a href="javascript:void(0)">Site Map</a></li>
                                    <li><a href="javascript:void(0)">Information</a></li>
                                </ul>
                                <p class="copyright-text">Designed and Developed by <a href="https://graygrids.com/"
                                        rel="nofollow" target="_blank">GrayGrids</a>
                                </p>
                                <ul class="footer-social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    @include('welcome.components.js')
</body>

</html>
