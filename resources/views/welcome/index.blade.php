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
                                        <a class="dd-menu collapsed active" href="{{ url('/') }}">Beranda</a>
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
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">
                        <!-- Start Hero Text -->
                        <div class="section-heading">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">ATR/BPN Kantor Pertanahan <br> Kantah Kota
                                Kotamobagu</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Aplikasi Tanda Terima Produk Layanan
                                Pertanahan <br>Di Kantor Pertanahan Kota Kotamobagu</p>
                        </div>
                        <!-- End Search Form -->
                        <!-- Start Search Form -->
                        <div class="search-form wow fadeInUp col-8 mx-auto" data-wow-delay=".7s">
                            <div class="row">
                                <div class="col-lg-9 col-md-4 col-12 p-0 ">
                                    <div class="search-input">
                                        <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                                        <input type="text" name="keyword" id="keyword" placeholder="Kode Berkas">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-2 col-12 p-0">
                                    <div class="search-btn button">
                                        <button class="btn"><i class="lni lni-search-alt"></i> Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Categories Area -->
    <section class="categories">
        <div class="container">
            <div class="cat-inner">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="category-slider">
                            <!-- Start Single Category -->
                            <a class="single-cat" class="single-cat" data-bs-toggle="modal" data-bs-target="#layanan1">
                                <div class="icon">
                                    <img src="/template_home/assets/images/categories/file-earmark-arrow-down.svg"
                                        alt="#">
                                </div>
                                <h3>Pemberian Hak Milik Perorangan</h3>
                                <h5 class="total">35</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat" data-bs-toggle="modal"
                                data-bs-target="#layanan2">
                                <div class="icon">
                                    <img src="/template_home/assets/images/categories/file-minus.svg" alt="#">
                                </div>
                                <h3>Roya</h3>
                                <h5 class="total">22</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat" data-bs-toggle="modal"
                                data-bs-target="#layanan3">
                                <div class="icon">
                                    <img src="/template_home/assets/images/categories/file-earmark-break.svg"
                                        alt="#">
                                </div>
                                <h3>Pemisahan/Pemecahan</h3>
                                <h5 class="total">55</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat" data-bs-toggle="modal"
                                data-bs-target="#layanan4">
                                <div class="icon">
                                    <img src="/template_home/assets/images/categories/file-earmark-medical.svg"
                                        alt="#">
                                </div>
                                <h3>Peralihan Hak/Balik Nama</h3>
                                <h5 class="total">21</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat" data-bs-toggle="modal"
                                data-bs-target="#layanan5">
                                <div class="icon">
                                    <img src="/template_home/assets/images/categories/file-earmark-person.svg"
                                        alt="#">
                                </div>
                                <h3>Waris </h3>
                                <h5 class="total">44</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat" data-bs-toggle="modal"
                                data-bs-target="#layanan6">
                                <div class="icon">
                                    <img src="/template_home/assets/images/categories/file-earmark-ruled.svg"
                                        alt="#">
                                </div>
                                <h3>Izin Perubahan Penggunaan Tanah</h3>
                                <h5 class="total">65</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat" data-bs-toggle="modal"
                                data-bs-target="#layanan7">
                                <div class="icon">
                                    <img src="/template_home/assets/images/categories/file-earmark-diff.svg"
                                        alt="#">
                                </div>
                                <h3>Sertipikat Pengganti (Karena Hilang/Rusak/Blangko Lama)</h3>
                                <h5 class="total">35</h5>
                            </a>
                            <!-- End Single Category -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Categories Area -->

    <!-- Start How Works Area -->
    <section class="how-works section mt-5" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Kantor ATR/BPN Kotamobagu</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Menjadi lembaga yang mampu mewujudkan tanah dan
                            pertanahan untuk sebesar-besar kemakmuran rakyat, serta keadilan dan keberlanjutan sistem
                            kemasyarakatan, kebangsaan dan kenegaraan Republik Indonesia..</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Work -->
                    <div class="single-work wow fadeInUp" data-wow-delay=".2s">
                        <span class="serial"><i class="lni lni-handshake"></i></span>
                        <h3>Mudah</h3>

                    </div>
                    <!-- End Single Work -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Work -->
                    <div class="single-work wow fadeInUp" data-wow-delay=".4s">
                        <span class="serial"><i class="lni lni-eye"></i></span>
                        <h3>Transparan</h3>

                    </div>
                    <!-- End Single Work -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Work -->
                    <div class="single-work wow fadeInUp" data-wow-delay=".6s">
                        <span class="serial"><i class="lni lni-skipping-rope"></i></span>
                        <h3>Proses Mudah Dilacak</h3>

                    </div>
                    <!-- End Single Work -->
                </div>
            </div>
        </div>
    </section>
    <!-- End How Works Area -->
    <!-- Button trigger modal -->

    <section>
        <!-- Modal -->
        <div class="modal fade" id="layanan1" tabindex="-1" aria-labelledby="layanan1Label" aria-hidden="true">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="layanan1Label">Pemberian Hak Milik Perorangan</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />

                        <div class="overflow-auto p-3 bg-light" style="max-width: 100%; max-height: 100%;">
                            1. Surat Kuasa apabila dikuasakan. <br>
                            2. Fotocopy KTP pemohon dan kuasa apabila dikuasakan. <br>
                            3. Fotocopy KK pemohon dan kuasa apabila dikuasakan yang sudah dilegalisir di capil/notaris.
                            <br>
                            4. Fotocopy SPPT pajak yang sudah dilegalisir di BPKD. <br>
                            5. Asli Surat Keterangan (Jual Beli, Waris, Hibah, Tukar Menukar) & KAR DESA. <br>
                            6. Materai 10.000 (8buah). <br>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#berkas-1">Unggah Berkas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="layanan2" tabindex="-1" aria-labelledby="layanan2Label" aria-hidden="true">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="layanan2Label">Roya</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />

                        <div class="overflow-auto p-3 bg-light" style="max-width: 100%; max-height: 100%;">
                            1. Sertipikat Asli. <br>
                            2. Sertipikat Hak Tanggungan. <br>
                            3. Surat Kuasa apabila dikuasakan. <br>
                            4. Fotocopy KTP Nama di Sertipikat dan Kuasa Apabila dikuasakan. <br>
                            5. Fotocopy KK Nama di Sertipikat dan Kuasa Apabila dikuasakan (Legalisir). <br>
                            6. Materai 10.000 (1 buah). <br>
                            7. Surat Pengantar Roya dan FC KTP penjabat Bank. <br>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#berkas-2">Unggah Berkas</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="layanan3" tabindex="-1" aria-labelledby="layanan3Label" aria-hidden="true">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="layanan3Label">Pemisahan/Pemecahan/Penggabungan</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />

                        <div class="overflow-auto p-3 bg-light" style="max-width: 100%; max-height: 100%;">
                            1. Sertipikat asli. <br>
                            2. Surat Kuasa Apabila diKuasakan. <br>
                            3. Fotocopy KTP nama di sertipikat dan kuasa apabila dikuasakan. <br>
                            4. Fotocopy KK nama di sertipikat dan kuasa apabila dikuasakan yang sudah dilegalisir di
                            capil/notaris.
                            5. Materai 10.000 (2buah)
                            6. SPPT-PBB. <br>
                            7. Tanda-tangan/Persetujuan Pemilik Berbatasan. <br>
                            8. Tapak kavling (dari Kantor BPN). <br>
                            9. Foto Patok/Batas Lokasi Yang Telah Terpasang dilengkapi Koordinat Lokasi <br>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#berkas-3">Unggah Berkas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="layanan4" tabindex="-1" aria-labelledby="layanan4Label" aria-hidden="true">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="layanan4Label">Peralihan Hak/Balik Nama</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />

                        <div class="overflow-auto p-3 bg-light" style="max-width: 100%; max-height: 100%;">
                            1. Surat Kuasa apabila dikuasakan. <br>
                            2. Fotocopy KTP pemohon dan kuasa apabila dikuasakan. <br>
                            3. Fotocopy KK pemohon dan kuasa apabila dikuasakan yang sudah dilegalisir di capil/notaris.
                            <br>
                            4. Fotocopy SPPT pajak yang sudah dilegalisir di BPKD. <br>
                            5. Asli Surat Keterangan (Jual Beli, Waris, Hibah, Tukar Menukar) & KAR DESA. <br>
                            6. Materai 10.000 (8buah). <br>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#berkas-4">Unggah Berkas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="layanan5" tabindex="-1" aria-labelledby="layanan5Label" aria-hidden="true">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="layanan5Label">Waris</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />

                        <div class="overflow-auto p-3 bg-light" style="max-width: 100%; max-height: 100%;">
                            1. Sertipikat asli. <br>
                            2. Surat Keterangan Waris / Putusan Pengadilan Tentang Penetapan Ahli Waris. <br>
                            3. Surat Kuasa apabila lebih dari 1 orang ahli waris. <br>
                            4. Fotocopy KTP ahli waris dan kuasa apabila dikuasakan. <br>
                            5. Fotocopy KK ahli waris dan kuasa apabila dikuasakan yang sudah dilegalisir di
                            capil/notaris. <br>
                            6. Fotocopy Akte Kematian yang sudah dilegalisir di capil/ Surat Keterangan Kematian dari
                            Kelurahan/Desa. <br>
                            7. Materai 10.000 (1 Buah). <br>
                            8. Fotocopy SPPT pajak yang sudah dilegalisir di BPKD. <br>
                            9. Form BPHTB yang sudah di validasi di BPKD. <br>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#berkas-5">Unggah Berkas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="layanan6" tabindex="-1" aria-labelledby="layanan6Label" aria-hidden="true">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="layanan6Label">Izin Perubahan Penggunaan Tanah</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />

                        <div class="overflow-auto p-3 bg-light" style="max-width: 100%; max-height: 100%;">
                            1. Sertipikat asli. <br>
                            2. Fotocopy KTP nama di sertipikat dan kuasa apabila dikuasakan. <br>
                            3. Fotocopy KK nama di sertipikat dan kuasa apabila dikuasakan yang sudah dilegalisir di
                            capil/notaris. <br>
                            4. Fotocopy SPPT pajak yang sudah dilegalisir di BPKD. <br>
                            5. Fotocopy NPWP. <br>
                            6. Surat Rekomendasi dari Dinas Pertanian dan Perikanan.<br>
                            7. Surat Rekomendasi dari Dinas PUPR. <br>
                            8. Materai 10.000 (1 Buah). <br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#berkas-6">Unggah Berkas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="layanan7" tabindex="-1" aria-labelledby="layanan7Label" aria-hidden="true">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="layanan7Label">Sertipikat Pengganti (Karena
                            Hilang/Rusak/Blangko Lama)</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />

                        <div class="overflow-auto p-3 bg-light" style="max-width: 100%; max-height: 100px;">
                            1. Sertipikat asli/fotocopy untuk Sertipikat Hilang. <br>
                            2. Surat Kuasa apabila dikuasakan.<br>
                            3. Fotocopy KTP nama di Sertipikat dan kuasa apabila dikuasakan.<br>
                            4. Fotocopy KK nama di Sertipikat dan kuasa apabila dikuasakan yang sudah dilegalisir di
                            capil/notaris.<br>
                            5. Materai 10.000 (1 Buah).<br>
                            6. Surat tanda lapor kehilangan dari Kepolisian untuk Sertipikat Hilang.<br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#berkas-7">Unggah Berkas</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Berkas -->
        <div class="modal fade" id="berkas-1" tabindex="-1" aria-labelledby="berkas-1Label" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="berkas-1Label">Pemberian Hak Milik Perorangan</h5>
                        <button type="button" onClick="window.location.reload();" class="btn-close text-white"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />
                        <form action="">
                            <div class="row align-items-center g-4">
                                <div class="col-6">
                                    <label class="form-label" for="surat-kuasa">Surat Kuasa Bila Dikuasakan</label>
                                    <input type="file" class="form-control" id="surat-kuasa" placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">FC KTP Pemohon & Kuasa Bila
                                        Dikuasakan</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-kk">FC KK Pemohon & Kuasa Bila Dikuasakan
                                        (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-kk" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">FC SPPT Pajak (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">Asli Surat Keterangan (Jual, Beli, Waris,
                                        Hibah, Tukar Menukar) & KAR Desa</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File"
                                        multiple>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onClick="window.location.reload();" class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="berkas-2" tabindex="-1" aria-labelledby="berkas-2Label" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="berkas-2Label">Roya</h5>
                        <button type="button" onClick="window.location.reload();" class="btn-close text-white"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />
                        <form action="">
                            <div class="row align-items-center g-4">
                                <div class="col-6">
                                    <label class="form-label" for="sertifikat-asli">Sertipikat Asli</label>
                                    <input type="file" class="form-control" id="sertifikat-asli"
                                        placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="sertipikat-hak">Sertipikat Hak Tanggungan</label>
                                    <input type="file" class="form-control" id="sertipikat-hak"
                                        placeholder="File" multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="surat-kuasa">Surat Kuasa apabila dikuasakan</label>
                                    <input type="file" class="form-control" id="surat-kuasa" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">FC KTP Nama di Sertipikat dan kuasa
                                        apabila dikuasakan</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-kk">FC KK Nama di Sertipikat dan kuasa
                                        apabila dikuasakan (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-kk" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="surat-pengantar">Surat Pengantar Roya dan FC KTP
                                        Pejabat Bank</label>
                                    <input type="file" class="form-control" id="surat-pengantar"
                                        placeholder="File" multiple>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onClick="window.location.reload();" class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="berkas-3" tabindex="-1" aria-labelledby="berkas-3Label" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="berkas-3Label">Pemisahan/Pemecahan/Penggabungan</h5>
                        <button type="button" onClick="window.location.reload();" class="btn-close text-white"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />
                        <form action="">
                            <div class="row align-items-center g-4">
                                <div class="col-6">
                                    <label class="form-label" for="sertipikat-asli">Sertipikat Asli</label>
                                    <input type="file" class="form-control" id="sertipikat-asli"
                                        placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="surat-kuasa">Surat Kuasa apabila diKuasakan</label>
                                    <input type="file" class="form-control" id="surat-kuasa" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">FC KTP Nama di Sertipikat dan kuasa
                                        apabila dikuasakan</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-kk">FC KK Nama di Sertipikat dan kuasa
                                        apabila dikuasakan (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-kk" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="sppt-pbb">SPPT-PBB</label>
                                    <input type="file" class="form-control" id="sppt-pbb" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="tanda-tangan">Tanda Tangan/Persetujuan Pemilik
                                        Berbatasan</label>
                                    <input type="file" class="form-control" id="tanda-tangan" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="tapak-kavling">Tapak Kavling</label>
                                    <input type="file" class="form-control" id="tapak-kavling" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="foto-patok">Foto Patok/Batas Lokasi Yang Telah
                                        Terpasang dilengkapi Koordinat Lokasi</label>
                                    <input type="file" class="form-control" id="foto-patok" placeholder="File"
                                        multiple>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onClick="window.location.reload();" class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="berkas-4" tabindex="-1" aria-labelledby="berkas-4Label" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="berkas-4Label">Peralihan Hak/Balik Nama</h5>
                        <button type="button" onClick="window.location.reload();" class="btn-close text-white"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />
                        <form action="">
                            <div class="row align-items-center g-4">
                                <div class="col-6">
                                    <label class="form-label" for="sertipikat-asli">Sertipikat Asli</label>
                                    <input type="file" class="form-control" id="sertipikat-asli"
                                        placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="surat-kuasa">Surat Kuasa apabila diKuasakan</label>
                                    <input type="file" class="form-control" id="surat-kuasa" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="akte">Akte (Jual Beli/Pembagian Hak Bersama)
                                        dari PPAT</label>
                                    <input type="file" class="form-control" id="akte" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">FC KTP (Penjual Suami
                                        Istri,Pembeli,Kuasa)</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-kk">FC KK (Penjual Suami Istri,Pembeli,Kuasa)
                                        Legalisir</label>
                                    <input type="file" class="form-control" id="fc-kk" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-sppt">FC SPPT (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-sppt" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="form-bphtb">Form BPHTB Yang Sudah diValidasi di
                                        BPKD</label>
                                    <input type="file" class="form-control" id="form-bphtb" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="formulir">Formulir Permohonan (dari Kantor
                                        BPN)</label>
                                    <input type="file" class="form-control" id="formulir" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="bukti">Bukti Pembayaran PPh (Jual Beli)</label>
                                    <input type="file" class="form-control" id="bukti" placeholder="File"
                                        multiple>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onClick="window.location.reload();" class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="berkas-5" tabindex="-1" aria-labelledby="berkas-5Label" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="berkas-5Label">Waris</h5>
                        <button type="button" onClick="window.location.reload();" class="btn-close text-white"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />
                        <form action="">
                            <div class="row align-items-center g-4">
                                <div class="col-6">
                                    <label class="form-label" for="sertipikat-asli">Sertipikat Asli</label>
                                    <input type="file" class="form-control" id="sertipikat-asli"
                                        placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="surat-keterangan">Surat Keterangan Waris/Putusan
                                        Pengadilan Mengenai Penetapan Ahli Waris</label>
                                    <input type="file" class="form-control" id="surat-keterangan"
                                        placeholder="File" multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="surat-kuasa">Surat Kuasa Apabila Lebih dari 1 Orang
                                        Ahli Waris </label>
                                    <input type="file" class="form-control" id="surat-kuasa" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">FC KTP Ahli Waris & Kuasa Bila Dikuasakan
                                    </label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-kk">FC KK Pemohon & Kuasa Bila Dikuasakan
                                        (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-kk" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-akte">FC Akte Kematian (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-akte" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">FC SPPT Pajak (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="form-bphtb">Form BPHTB yang Sudah diValidasi di
                                        BPKD</label>
                                    <input type="file" class="form-control" id="form-bphtb" placeholder="File"
                                        multiple>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onClick="window.location.reload();" class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="berkas-6" tabindex="-1" aria-labelledby="berkas-6Label" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="berkas-6Label">Izin Perubahan Penggunaan Tanah</h5>
                        <button type="button" onClick="window.location.reload();" class="btn-close text-white"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />
                        <form action="">
                            <div class="row align-items-center g-4">
                                <div class="col-6">
                                    <label class="form-label" for="sertipikat-asli">Sertipikat Asli</label>
                                    <input type="file" class="form-control" id="sertipikat-asli"
                                        placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">FC KTP Nama di Sertipikat dan kuasa
                                        apabila dikuasakan</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-kk">FC KK Nama di Sertipikat dan kuasa
                                        apabila dikuasakan (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-kk" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-sppt">FC SPPT Pajak (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-sppt" placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-npwp">FC NPWP</label>
                                    <input type="file" class="form-control" id="fc-npwp" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="surat-rekomendasi">Surat Rekomendasi dari Dinas
                                        Pertanian dan Perikanan</label>
                                    <input type="file" class="form-control" id="surat-rekomendasi"
                                        placeholder="File" multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="surat-rekom">Surat Rekomendasi dari Dinas
                                        PUPR</label>
                                    <input type="file" class="form-control" id="surat-rekom" placeholder="File"
                                        multiple>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onClick="window.location.reload();" class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="berkas-7" tabindex="-1" aria-labelledby="berkas-7Label" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="berkas-7Label">Sertipikat Pengganti (Karena
                            Hilang/Rusak/Blangko Lama)</h5>
                        <button type="button" onClick="window.location.reload();" class="btn-close text-white"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                <strong>Persyaratan Berkas</strong>
                            </p>
                        </div>

                        <hr />
                        <form action="">
                            <div class="row align-items-center g-4">
                                <div class="col-6">
                                    <label class="form-label" for="sertipikat">Sertipikat asli/FC untuk Sertipikat
                                        Hilang</label>
                                    <input type="file" class="form-control" id="sertipikat" placeholder="File">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="surat-kuasa">Surat Kuasa Bila Dikuasakan</label>
                                    <input type="file" class="form-control" id="surat-kuasa" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">FC KTP Nama di Sertipikat dan kuasa
                                        apabila dikuasakan</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-kk">FC KK Nama di Sertipikat dan kuasa
                                        apabila dikuasakan (Legalisir)</label>
                                    <input type="file" class="form-control" id="fc-kk" placeholder="File"
                                        multiple>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="fc-ktp">Surat Tanda Lapor Kehilangan Dari
                                        Kepolisian untuk Sertipikat Hilang</label>
                                    <input type="file" class="form-control" id="fc-ktp" placeholder="File"
                                        multiple>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onClick="window.location.reload();" class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Submit</button>
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
                                    <li><a href="https://www.facebook.com/KementerianATRBPN" target="_blank"><i
                                                class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="https://instagram.com/kementerian.atrbpn?igshid=YmMyMTA2M2Y="
                                            target="_blank"><i class="lni lni-instagram-original"></i></a></li>
                                    <li><a href="https://twitter.com/atr_bpn?t=XNLPTUfwCytSjY26wddJhQ&s=09"
                                            target="_blank"><i class="lni lni-twitter-original"></i></i></a></li>
                                    <li><a href="https://www.atrbpn.go.id/" target="_blank"><i
                                                class="lni lni-chrome"></i></a></li>
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
