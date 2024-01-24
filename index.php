<?php
  function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
                
    }
    return $text;
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CV Trimitra Abadi</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logotrimitra.jpg" rel="icon">
  <link href="img/logotrimitra.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="dist/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="dist/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="dist/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="dist/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="dist/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="dist/lib/animate/animate.min.css" rel="stylesheet">
  <link href="dist/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="dist/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="dist/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="dist/css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="Plant"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>CV Trimitra Abadi</span></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">Tentang Kami</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#sejarah">Sejarah</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Layanan</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Jajaran Direksi</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Pesan Sekarang</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#blog">Blog</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/about/wp1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/about/2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/about/wp2.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">CV Trimitra Abadi</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Menyediakan Jasa yang Anda Butuhkan</h1>
                </div>
                <!-- layer 3 -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">CV Trimitra Abadi</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Tersedia Jasa Kontruksi Sampai Jasa Cuci Mobil</h1>
                </div>
                <!-- layer 3 -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">CV Trimitra Abadi</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Kini Telah Hadir Pemesanan Online yang Memudahkan Anda.</h1>
                </div>
                <!-- layer 3 -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Tentang Kami</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="img/1.jpg" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
               <h4 class="sec-head">Selamat Datang di Website Trimitra Abadi</h4>
              </a>
              <?php
              $sql_bl = "SELECT `id_profil`,`isi` FROM `profil`";
              $query_bl = mysqli_query($koneksi,$sql_bl);
              while ($data_bl = mysqli_fetch_row($query_bl)) {
                $id_profil = $data_bl[0];
                $isi = $data_bl[1];
              ?>
              <p class="blog-post-meta"><?php echo $isi;?></p>
            <?php } ?>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->
  <!-- Faq area start -->
  <div id="sejarah"class="faq-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Sejarah</h2>
          </div>
        </div>
      </div>
      <div style="display: flex;justify-content:center">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="faq-details">
          <?php
              $sql_bl = "SELECT `isi` FROM `sejarah` where id_sejarah = 2";
              $query_bl = mysqli_query($koneksi,$sql_bl);
              while ($data_bl = mysqli_fetch_row($query_bl)) {
                $isi = $data_bl[0];
              ?>
              <p class="blog-post-meta"><?php echo $isi;?></p>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->
 <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Layanan Kami</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                      <img src="img/about/im.jpg">
                    </a>
                  <h4>Cuci Mobil</h4>
                  <p>
                  CV Trimitra Abadi menyedeikan jasa cuci mobil yang siap membuat mobil anda terlihat seperti baru lagi.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                      <img src="img/about/imr.png">
                    </a>
                  <h4>Cuci Motor</h4>
                  <p>
                  CV Trimitra Abadi menyedeikan jasa cuci motor yang siap membuat motor anda terlihat seperti baru lagi.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                      <img src="img/about/ip.png">
                    </a>
                  <h4>Bahan & Jasa Kontruksi</h4>
                  <p>
                  CV Trimitra Abadi menyediakan semua jasa dan bahan kontrkusi yang Anda perlukan.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-3 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                      <img src="img//about/ib.png">
                    </a>
                  <h4>Paving Blok</h4>
                  <p>
                  CV Trimitra Abadi menyediakan jenis paving blok yang Anda inginkan.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->
  <!-- End Service area -->
  <!-- Start Wellcome Area -->
  <div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>CV Trimitra Abadi</h2>
                <p>
                  Menyediakan Semua Jasa yang Anda Perlukan
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Wellcome Area -->

  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Jajaran Direksi</h2>
          </div>
        </div>
      </div>
      <section id="product-item">
      <div class="container">
        <div class="row">
          <?php
            //gat data jajaran
            $sql = "SELECT `j`.`id_jajaran`, `jj`.`jabatan`,`j`.`foto`,`j`.`nama` FROM `jajaran` `j` INNER JOIN `jabatan` `jj` ON `j`.`id_jabatan`= `jj`.`id_jabatan` ORDER BY `j`.`id_jajaran` DESC LIMIT 7"; 
            $query = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_row($query)){
              $id_jabatan = $data[0];
              $jabatan = $data[1];
              $foto = $data[2];
              $nama = $data[3];
          ?>
            <div class=" col-lg-4 col-md-3">
              <div class="card mb- shadow-sm">
                <img src="admin/jajaran/<?php echo $foto;?>" class="img-fluid" alt="<?php echo $nama;?>" title="<?php echo $nama;?>">
                <div class="card-body bg-warning" style="text-align:center">
                <p class="card-text"><?php echo $nama;?></p>
                <h4 class="card-text"><?php echo $jabatan;?></h4>
                </div>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
    </section><br><br><!-- #product-item -->
    </div>
  </div>
  <!-- End Team Area -->
  <!-- Start portfolio Area -->
 <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Pesanan</h2>
          </div>
        </div>
      </div>
      <div class="row">
        
         <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#"><img src="img/about/5.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Tentang Pemesanan</h4>
              </a>
              <p>
              Para pelanggan setia CV Trimitra Abadi dapat memesan jasa yang disediakn melalui form yang sudah disediakn dibawah ini, 
              berikut tata cara untuk pemesanan :
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Silahkan isi nama Anda
                </li>
                <li>
                  <i class="fa fa-check"></i> Silahkan isi data alamat Anda
                </li>
                <li>
                  <i class="fa fa-check"></i> Silahkan isi no hp Anda
                </li>
                <li>
                  <i class="fa fa-check"></i> Silahkan isi alamat email Anda
                </li>
                <li>
                  <i class="fa fa-check"></i> Silahkan isi pesanan anda
                </li>
                <li>
                  <i class="fa fa-check"></i> Silahkan tanggal pesanan yang Anda buat
                </li>
                <li>
                  <i class="fa fa-check"></i> Setelah melakukan pemesanan, Admin CV Trimitra Abadi akan menghubungi lewat nomor HP anda yang telah dicantumkan sebelumnya.
                </li>
                <p></p>
                <p></p>
                <p></p>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->

        <div id="Data" class="Data-area area-padding">
          <div class="well-bg">
            <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Silahkan Isi Data Anda !</h2>
                </div>
                <div class="col-sm-10">
                
              <?php if((!empty($_GET['notif']))||(!empty($_GET['jenis']))){?>
                <?php if($_GET['notif']=="tambahkosong"){?>
                  <div class="alert alert-danger" role="alert">Maaf data
                  <?php echo $_GET['jenis'];?> wajib di isi</div>
                <?php } elseif($_GET['notif']=="tambahberhasil"){?>
                  <div class="alert alert-success" role="alert">Selamat Data Berhasil</div>
                <?php } ?>
              <?php } ?>
            </div>
              </div>
              <form method="POST" action="index.php?include=konfirmasi-tambah-recruitment">
                </div>
              </div>
            </div>
                <div class="form-group"></div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="nama" id="nama" value="">
                    </div>
                  </div>   
                <div class="form-group row">
                  <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="alamat" id="alamat" value="">
                  </div>
                </div>   
                <div class="form-group row">
                  <label for="no_hp" class="col-sm-3 col-form-label">Nomor HP</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_hp" id="no_hp" value="">
                  </div>
                </div>   
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="email" id="email" value="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tanggal_pemesanan" class="col-sm-3 col-form-label">Tanggal Pemesanan</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal_pemesanan" id="tanggal_pemesanan" value="">
                  </div>
                </div>
                <div class="form-group row">   
                <label class="col-sm-3 col-form-label">Bidang Jasa</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="jasa" name="jasa">
                      <option value="">- Pilih Divisi -</option>     
                      <?php 
                      $sql_t="SELECT `id_jasa`,`pelayanan` FROM `jasa` ORDER BY `pelayanan` ";
                      $query_t = mysqli_query($koneksi, $sql_t);
                      while($data_t = mysqli_fetch_row($query_t)){
                        $id_jasa = $data_t[0];
                        $pelayanan = $data_t[1]; 
                      ?>                
                      <option value="<?php echo $id_jasa; ?> "><?php echo $pelayanan; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>  
                  <div class="card-footer">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-info float-right">Kirim</button>
                    </div>  
                  </div>
              </form>
      </div>
    </div>
  </div>
  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Welcome to Trimitra Abadi
                    </p>
                    <h6>Tortoise</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                     A bad day isn't bad life
                    </p>
                    <h6>Mowls</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                    Sukses Berawal dari S
                    </p>
                    <h6>Unknown</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Sejenak Info</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
            <?php
              $batas = 3;
              $sql_bl = "SELECT `id_blog`,`id_user`,`tanggal`,`judul`,`isi`,`foto` FROM `blog` LIMIT $batas";
              $query_bl = mysqli_query($koneksi,$sql_bl);
              while($data_bl = mysqli_fetch_row($query_bl)){
                $id_blog = $data_bl[0];
                $id_user = $data_bl[1];
                $tgl = $data_bl[2];
                $judul = $data_bl[3];
                $isi = $data_bl[4];
                $foto = $data_bl[5];
          ?>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
                <img src="admin/blog/<?php echo $foto;?>" class="img-fluid">
                  </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#"></a>
                  </span>
                  
                <span class="date-type">
                    <i class="fa fa-calendar"><?php echo $tgl; ?> </i>
                  </span>
              </div>
              <div class="blog-text">
                <h4>
                  <a href="index.php?include=detail-blog&data=<?php echo $id_blog; ?>"><?php echo $judul;?></a>
                </h4>
                <p>
                 <?php echo limit_text($isi,50);?> 
                </p>
              </div>
              <span>
                  <a href="index.php?include=detail-blog&data=<?php echo $id_blog; ?>" class="ready-btn">Read more</a>
                </span>
            </div>
          </div>
        <?php } ?>
      </div>
           
  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Trimitra Abadi Solusi Tepat Dalam Waktu Singkat</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Kontak Kami</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Telepon: <br>+62 838 5200 7905<br>
                  +62 813 3429 4016<br>
                  <span>Buka Setiap Hari Kecuali Hari Selasa <br>
                  Jam : 08.00-20.00</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: trimitraabadi15@gmail.com<br>
                  <span>Web: www.trimitraabadi.com<br>
                  Instagram: @trimitraabadi</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Lokasi: Jalan Raya Soekarno Hatta<br>
                  <span>Pilang, Kecamatan Kademangan, Kota Probolinggo</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>

</html>
