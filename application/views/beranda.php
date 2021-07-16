<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Higiene Sanitasi Pangan Siap Saji</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico')?>">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=PT+Sans&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/elegant-icons.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/barfiller.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="#"><img src="<?php echo base_url('assets/img/logo_slhs.png')?>" alt="" height="70px"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?php echo base_url();?>beranda">Beranda</a></li>
                                <li><a href="#">Kebijakan</a>
                                    <ul class="dropdown">
                                        <li><a href="#">PP</a></li>
                                        <li><a href="#">Permenkes</a></li>
                                        <li><a href="#">UU</a></li>
                                        <li><a href="#">Lihat lainnya</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Panduan</a></li>
                                <li><a href="#">Informasi</a></li>
                                <li><a href="#">Kontak Kami</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <video loop muted autoplay preload="auto">
            <source src="<?php echo base_url('assets/video/video2.mp4')?>" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="section-title">
                            <h2>HIGIENE SANITASI PANGAN SIAP SAJI</h2>
                            <p>Cari dan Temukan usaha yang sudah tersertifikasi SLHS disekitar Anda</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <a href="#provinsi" class="primary-btn">Jelajahi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h1>Categories</h1>
                        <p1>Temukan tempat-tempat yang sudah tersertifikasi SLHS</p1>
                    </div>
                    <div class="hero__search__form">
                        <form action="<?php echo base_url();?>pencarian">
                            <input type="text" placeholder="Ketik lokasi yang Anda inginkan">
                            <button type="submit">Cari</button>
                        </form>
                    </div>
                    <div class="categories__item__list">
                        <div class="categories__item">
                            <a href="<?php echo base_url();?>categori"><img src="<?php echo base_url('assets/img/category/restoran.png')?>" alt=""></a>
                        </div>
                        <div class="categories__item">
                            <a href="<?php echo base_url();?>categori"><img src="<?php echo base_url('assets/img/category/jasa_boga.png')?>" alt=""></a>
                        </div>
                        <div class="categories__item">
                            <a href="<?php echo base_url();?>categori"><img src="<?php echo base_url('assets/img/category/depot_air.png')?>" alt=""></a>
                        </div>
                        <div class="categories__item">
                            <a href="<?php echo base_url();?>categori"><img src="<?php echo base_url('assets/img/category/makanan_jajanan.png')?>" alt=""></a>
                        </div>
                        <div class="categories__item">
                            <a href="<?php echo base_url();?>categori"><img src="<?php echo base_url('assets/img/category/kantin_institusi.png')?>" alt=""></a>
                        </div>
                        <div class="categories__item">
                            <a href="<?php echo base_url();?>categori"><img src="<?php echo base_url('assets/img/category/sentra_jajanan.png')?>" alt=""></a>
                        </div>
                        <div class="categories__item">
                            <a href="<?php echo base_url();?>categori"><img src="<?php echo base_url('assets/img/category/kantin_sekolah.png')?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories End -->

    <!-- Provinsi -->
    <section id="provinsi" class="feature-location spad set-bg" data-setbg="<?php echo base_url('assets/img/hero/bg_provinsi.jpg')?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Provinsi Pilihan</h2>
                        <p>Ketahui Tempat Pengolahan Makanan di tiap Provinsi</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a href="#" class="feature__location__item large-item set-bg"
                        data-setbg="<?php echo base_url('assets/img/provinsi/yogyakarta')?>.jpg">
                        <div class="feature__location__item__text">
                            <h5>Daerah Istimewa Yogyakarta</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="feature__location__item set-bg"
                                data-setbg="<?php echo base_url('assets/img/provinsi/padang.jpg')?>">
                                <div class="feature__location__item__text">
                                    <h5>Sumatera Barat</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="feature__location__item set-bg"
                                data-setbg="<?php echo base_url('assets/img/provinsi/surabaya.jpg')?>">
                                <div class="feature__location__item__text">
                                    <h5>Jawa Timur</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="feature__location__item set-bg" 
                        data-setbg="<?php echo base_url('assets/img/provinsi/bali.jpg')?>">
                        <div class="feature__location__item__text">
                            <h5>Bali</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <a href="#" class="primary-btn">Lihat Lebih Banyak</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Provinsi End -->
    
    <!-- Berita -->
    <section class="news-post spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="section-title">
                        <h1>Berita Terbaru SLHS</h1>
                        <p1>Ketahui informasi dan berita terbaru tentang SLHS.</p1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="section-title">
                        <a href="#" class="primary-btn">Lihat Lainnya</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="<?php echo base_url('assets/img/blog/blog-1.jpg')?>">
                            <a href="https://www.youtube.com/watch?v=TnZnd26VcTg" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="#">Gerakan Masyarakat Pangan Aman dan Sehat</a></h5>
                            <ul class="blog__item__widget">
                                <li><i class="fa fa-clock-o"></i> 05 July, 2021</li>
                                <li><i class="fa fa-user"></i> Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="<?php echo base_url('assets/img/news/berita1.png')?>"></div>
                        <div class="blog__item__text">
                            <h5><a href="#">Sertifikat Laik Higiene Sanitasi</a></h5>
                            <ul class="blog__item__widget">
                                <li><i class="fa fa-clock-o"></i> 05 July, 2021</li>
                                <li><i class="fa fa-user"></i> Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="<?php echo base_url('assets/img/news/berita2.png')?>"></div>
                        <div class="blog__item__text">
                            <h5><a href="#">Sertifikat Laik Higiene Sanitasi</a></h5>
                            <ul class="blog__item__widget">
                                <li><i class="fa fa-clock-o"></i> 05 July, 2021</li>
                                <li><i class="fa fa-user"></i> Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Berita End -->
    
    <!-- SLHS -->
    <section class="feature-location spad set-bg" data-setbg="<?php echo base_url('assets/img/hero/hero.jpg')?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="blog__sidebar__categories">
                        <h5>Top 10 Provinsi</h5>
                        <ul>
                            <li><a href="#">JAWA TENGAH <span>2194</span></a></li>
                            <li><a href="#">JAWA TIMUR <span>554</span></a></li>
                            <li><a href="#">KEPULAUAN RIAU <span>384</span></a></li>
                            <li><a href="#">DKI JAKARTA <span>334</span></a></li>
                            <li><a href="#">SULAWESI TENGGARA <span>333</span></a></li>
                            <li><a href="#">JAWA BARAT <span>332</span></a></li>
                            <li><a href="#">RIAU <span>319</span></a></li>
                            <li><a href="#">KALIMANTAN TIMUR <span>211</span></a></li>
                            <li><a href="#">BALI <span>153</span></a></li>
                            <li><a href="#">KALIMANTAN BARAT <span>123</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="section-title mb-5">
                        <h4>SERTIFIKAT LAIK HIGIENE SANITASI</h4>
                        <h5 class="text-white">Sertifikat Laik Higiene Sanitasi yang dikeluarkan pemerintah daerah 
                            sebagai bukti tertulis terhadap Restoran/Rumah Makan, Jasa Boga/Catering, 
                            Depot Air Minum, Makanan Jajanan, Kantin Institusi, Sentra Jajanan, dan Kantin Sekolah
                             yang telah memenuhi persyaratan sesuai ketentuan peraturan perundang-undangan.</h5>
                    </div>
                    <div class="mx-lg-auto">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-2 mb-3 mb-sm-0">
                                <div class="section-title text-center rounded px-3 pt-3 pb-2">
                                    <h3>116.122</h3>
                                    <p class="font-size-1 mb-0">JUMLAH TPM DI IKL/DIBINA</p>
                                </div>
                            </div>  
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 px-2 mb-3 mb-sm-0">
                                <div class="section-title text-center rounded px-3 pt-3 pb-2">
                                    <h3>93.233</h3>
                                    <p class="font-size-1 mb-0">JUMLAH TPM LAIK HSP<br><br></p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 px-2 mb-3 mb-sm-0">
                                <div class="section-title text-center rounded px-3 pt-3 pb-2">
                                    <h3>5.486</h3>
                                    <p class="font-size-1 mb-0">JUMLAH TPM BERSERTIFIKAT LAIK HSP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="section-title">
                            <h3>195.751</h3>
                            <p class="font-size-1 mb-0">Jumah TPM Terdaftar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SLHS End -->

    <!-- Playstore Begin -->
    <section class="newslatter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="newslatter__text">
                        <a href="./index.html"><img src="<?php echo base_url('assets/img/logo_germas.png')?>" alt="" height="120px"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="newslatter__text">
                        <h3>GERMAS PAS</h3>
                        <p>Germas PAS merupakan suatu aplikasi yang didedikasikan 
                            kepada masyarakat untuk memudahkan dalam memperoleh 
                            informasi TPM yang aman dan sehat sesuai dengan standar 
                            Higiene Sanitasi Pangan.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="section-title">
                    <a href='https://play.google.com/store/apps/details?id=com.kesling.germaspas&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Playstore End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <img src="<?php echo base_url('assets/img/Logo_SLHS.png')?>" alt="" class="mb-20" height='50px'>
                            <img src="<?php echo base_url('assets/img/logo_kemenkes.png')?>" alt="" class="mb-20"height='50px'>
                        </div>
                        <h5>Kementerian Kesehatan Republik Indonesia</h5>
                        <p>Gedung Sujudi, Jl. H. R. Rasuna Said No.Kav 4 - 9, RT.9/RW.4, 
                            Kuningan, Kuningan Tim., Kuningan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <span>Call Us:</span>
                                <p>021-5201590 (hunting)</p>
                            </li>
                            <li>
                                <span>Email:</span>
                                <p>kontak@kemkes.go.id</p>
                            </li>
                            <li>
                                <span>Fax:</span>
                                <p>(021) 52921669</p>
                            </li>
                            <li>
                                <span>Connect Us:</span>
                                <div class="footer__social">
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__widget">
                        <ul>
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Kebijakan</a></li>
                            <li><a href="#">Panduan</a></li>
                            <li><a href="#">Informasi</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                        </ul>
                        <ul>
                            <a href="#" class="primary-btn">Masuk</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nicescroll.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.barfiller.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
</body>

</html>