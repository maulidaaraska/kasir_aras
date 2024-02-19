<!DOCTYPE html>
<html lang="en">

<head>

    <title>Pure Glow</title>
    <!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?= base_url('landing') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('landing') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('landing') ?>/css/animate.css">
    <link rel="stylesheet" href="<?= base_url('landing') ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('landing') ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('landing') ?>/css/magnific-popup.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url('landing') ?>/css/templatemo-style.css">

</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand">Pure <span>.</span> Glow</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?= base_url('auth') ?>" class="smoothScroll">Login</a>
                    </li>
                </ul>
            </div>

        </div>
    </section>


    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="row">

            <div class="owl-carousel owl-theme">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h3>Perawatan &amp; Kecantikan</h3>
                                <h1>Temukan Kesempurnaan Kulitmu dengan PureGlow</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h3>Berkilau Bersama PureGlow</h3>
                                <h1>Kemudahan Berbelanja, Kecantikan Kulit yang Mengagumkan</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h3>Maksimalkan Keindahan Kulit Anda</h3>
                                <h1>Membawa Anda ke Kilauan yang Lebih Baik</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h4>Tentang Kami</h4>
                            <h2>Kami hadir untuk memenuhi kebutuhan kulitmu</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Kami menawarkan beragam produk perawatan kulit yang lengkap, mulai dari pembersih wajah hingga pelembap, serum, masker, dan perlindungan matahari. </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="<?= base_url('landing') ?>/images/tentang-toko.png" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- TEAM -->
    <section id="team" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Produk terlaris</h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?= base_url('landing') ?>/images/produk-terlaris1.jpg" class="img-responsive" alt="">
                        <div class="team-hover">
                            <div class="team-item">
                                <h4>The Originote</h4>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Micellar Water</h3>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?= base_url('landing') ?>/images/produk-terlaris2.jpg" class="img-responsive" alt="">
                        <div class="team-hover">
                            <div class="team-item">
                                <h4>Facetology</h4>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Sunscreen</h3>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <img src="<?= base_url('landing') ?>/images/produk-terlaris3.jpg" class="img-responsive" alt="">
                        <div class="team-hover">
                            <div class="team-item">
                                <h4>Skintific</h4>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Mugwort Clay Mask Stick</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- MENU-->
    <section id="menu" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Slogan Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- TESTIMONIAL -->
    <section id="testimonial" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">



                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <p>Temukan Kecantikan Aslimu dengan PureGlow</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="footer-info footer-open-hour">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Jam buka</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <div>
                                <strong>Selasa - Jumat</strong>
                                <p>07.00 - 21.00 WIB</p>
                            </div>
                            <div>
                                <strong>Sabtu - Minggu</strong>
                                <p>11.00 - 22.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                        <p><br>Copyright &copy; 2024 <br>PureGlow

                            <br><br>Design: <a rel="nofollow" href="http://templatemo.com" target="_parent">Maulida Araska</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="<?= base_url('landing') ?>/js/jquery.js"></script>
    <script src="<?= base_url('landing') ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url('landing') ?>/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url('landing') ?>/js/wow.min.js"></script>
    <script src="<?= base_url('landing') ?>/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('landing') ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('landing') ?>/js/smoothscroll.js"></script>
    <script src="<?= base_url('landing') ?>/js/custom.js"></script>

</body>

</html>