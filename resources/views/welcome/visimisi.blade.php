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
                                        <a class="dd-menu collapsed active" href="#" data-bs-toggle="collapse"
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
                                        <a class="dd-menu collapsed" href="{{ url('/kontak') }}">Kontak Kami</a>
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
                        <h1 class="page-title">Visi & Misi</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="/">Beranda</a></li>
                        <li>Visi & Misi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section class="about-us section">
        <div class="container">
            <div class="justify-content-center mb-5">
                <div class=" container col-lg-12 col-md-12 col-12">
                    <div class="content-right wow fadeInRight" data-wow-delay=".5s">
                        <h2>
                            Dalam menjalankan roda organisasi, visi dan misi menjadi tujuan bersama yang mampu
                            mempersatukan
                            setiap
                            orang yang bergabung di dalamnya. Visi dan misi Kantor Pertanahan Kota Kotamobagu yaitu
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- content-1 start -->
                    <div class="content-right wow fadeInRight" data-wow-delay=".5s">
                        <!-- Heading -->
                        <span class="sub-heading">Visi</span>
                        <h4 class="mb-2">
                            Kementerian Agraria Dan Tata Ruang/ Badan Pertanahan Nasional
                        </h4>
                        <p style="font-size:15px">Menjadi lembaga yang mampu mewujudkan tanah dan pertanahan untuk
                            sebesar-besar kemakmuran rakyat, serta keadilan dan keberlanjutan sistem kemasyarakatan,
                            kebangsaan dan kenegaraan Republik Indonesia.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- content-1 start -->
                    <div class="content-right wow fadeInRight" data-wow-delay=".5s">
                        <!-- Heading -->
                        <span class="sub-heading">Misi</span>
                        <h4 class="mb-2">
                            Kementerian Agraria Dan Tata Ruang/ Badan Pertanahan Nasional
                        </h4>
                        <p style="font-size:15px">Mengembangkan dan menyelenggarakan politik dan kebijakan pertanahan
                            untuk:
                            Peningkatan kesejahteraan rakyat, penciptaan sumber-sumber baru kemakmuran rakyat
                            pengurangan kemiskinan dan kesenjangan pendapatan, serta pemantapan ketahanan pangan.
                            Peningkatan tatanan kehidupan bersama yang lebih berkeadilan dan bermartabat dalam kaitannya
                            dengan penguasaan, pemilikan, penggunaan dan pemanfaatan tanah (P4T).
                            Perwujudan tatanan kehidupan bersama yang harmonis dengan mengatasi berbagai sengketa,
                            konflik dan perkara pertanahan di seluruh tanah air dan penataan perangkat hukum dan sistem
                            pengelolaan pertanahan sehingga tidak melahirkan sengketa, konflik dan perkara di kemudian
                            hari.
                            Keberlanjutan sistem kemasyarakatan, kebangsaa dan kenegaraan Indonesia dengan memberikan
                            akses seluas-luasnya pada generasi yang akan datang terhadap tanah sebagai sumber
                            kesejahteraan masyarakat. Menguatkan lembaga pertanahan sesuai dengan jiwa, semangat,
                            prinsip dan aturan yang tertuang dalam UUPA dan aspirasi rakyat secara luas.</p>
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
