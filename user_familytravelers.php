<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['familytravelers_name']))
{header('location:login_form.php');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>familytravelers page</title>

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/user.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/dashboard.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->


  <!-- SEE NOW -->
    
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>


    </head>
    <body>
    <nav>
    <div class="layar-dalam">
        <div class="logo">
            <a href=""><img src="asset/GSK_D-White.png" class="putih" /></a>
            <a href=""><img src="asset/GSK_D_Black.png" class="hitam" /></a>
        </div>
        <div class="main-menu  d-none d-lg-block">
           <a href="#" class="tombol-menu">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </a>
            <ul>   <!--NAV BAR-->
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutus">Gallery</a></li>
                <li>
                <a href="#">Destinasi <i class="ti-angle-down"></i></a>
                <ul class="submenu">
                    <li><a href="kategori_sejarah.php">Sejarah</a></li>
                    <li><a href="Kategori_Bukit.php">Bukit</a></li>
                    <li><a href="Kategori_Keagamaan.php">Keagamaan</a></li>
                    <li><a href="Kategori_Kolam.php">Waterboom</a></li>
                    <li><a href="Kategori_Alam.php">Alam</a></li>
                    <li><a href="Kategori_Pantai.php">Pantai</a></li>
              </ul>
              </li>
              <li>
              </li>     <!-- NAV BAR -->
                <li><a href="#Rekomendasi">Rekomendasi</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="formulir.php">Rating</a></li>
                <a href="logout.php" type="button" class="cta cta-header1">Logout</a
               li>
             
            </ul>
        </div>
      </div>
    </nav>
      <!-- HOME -->
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="asset/Gresik-video.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>Visit Gresik</h3>
          <p>Gresik terletak sekitar 20 km barat laut dari Surabaya dan termasuk dalam wilayah metropolitan Surabaya.</p>

          
        <!-- ABOUT US -->
      </header>
      <main>
      
        <div class="main-txt">
         
          <!-- Gal -->
        
  <style>
    .attribution {
      font-size: 11px;
      text-align: center;
    }

    .attribution a {
      color: hsl(228, 45%, 44%);
    }
  </style>
</head>
<body>
  <section id="header">
    <div class="container">
      <div class="nav">
        <div class="logo"></div>
        

      <div class="hero">
        <div class="hero-info">
          <h1>Ayo Kulinerann !!</h1>
          <p> Bingung cari makanan yang enak di daerah Gresik ???
          Yuk lihat beberapa rekomendasi oleh - oleh dan kulineran enak.</p>
          <a href="kuliner.php" type="button" class="cta cta-hero">Lihat</a>
        </div>
        <div class="hero-img"><img src="./asset/wisata.png" alt=""></div>
      </div>
      </div>
  
  <!-- BLOG -->
    </section>
    <script src="js/main.js"></script>
</body>
        

<!-- Section Packages Start -->
<section class="Rekomendasi" id="Rekomendasi">
      <div class="container">
        
        <div class="main-txt">
          <h1><span>REKO</span>MENDASI</h1>
        </div>
        <div class="container">
        <div class="row" style="margin-top: 30px;">
            <!-- Card 1 -->
            <div class="col-md-4 py-3">
                <div class="card">
                    <img src="asset/pntaikering.jpg" class="card-img-top" alt="1 Hari">
                    <div class="card-body">
                        <h3>Pantai Karang Kering</h3>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h6>Price: <strong>300.000</strong></h6>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                            See Now
                        </button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 py-3">
                <div class="card">
                    <img src="asset/pantaidelegan.jpg" class="card-img-top" alt="2 Hari">
                    <div class="card-body">
                        <h3>Pantai Delegan</h3>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h6>Price: <strong>500.000</strong></h6>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
                            See Now
                        </button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 py-3">
                <div class="card">
                <img src="asset/pulaumengare.jpg" class="card-img-top" alt="3 Hari">
                    <div class="card-body">
                        <h3>Pulau Mengare</h3>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h6>Price: <strong>700.000</strong></h6>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
                            See Now
                        </button>
                    </div>
                    </div>
                    </div>
            <!-- Card 4 -->
            <div class="col-md-4 py-3">
                <div class="card">
                    <img src="asset/kolamawan.jpg" class="card-img-top" alt="2 Hari">
                    <div class="card-body">
                        <h3>Bukit Awan</h3>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h6>Price: <strong>100.000</strong></h6>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
                            See Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4 py-3">
                <div class="card">
                    <img src="asset/dynastywaterworld.jpg" class="card-img-top" alt="1 Hari">
                    <div class="card-body">
                        <h3>Dynasty Water World</h3>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h6>Price: <strong>150.000</strong></h6>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                            See Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4 py-3">
                <div class="card">
                    <img src="asset/bajak.jpg" class="card-img-top" alt="2 Hari">
                    <div class="card-body">
                        <h3>Bajak Laut</h3>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h6>Price: <strong>100.000</strong></h6>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
                            See Now
                        </button>
                    </div>
                </div>
            </div>


        <!-- Modal 1 -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="asset/hutan.jpeg" class="img-thumbnail" alt="1 Hari">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            
                            <p>Di Pantai Karang Kering, pengunjung dapat melihat panorama dari ombak yang bergulung-gulung dan juga bebatuan karang yang ada di tepi pantai. Wisatawan juga bisa berfoto ria di spot foto yang tersedia di sana. Pantai Karang Kering ini juga sudah menyediakan sejumlah fasilitas penunjang wisata. Lokasi pantai ini tidak begitu jauh dari tengah kota sehingga membuat pantai ini kerap menjadi destinasi para wisatawan yang datang ke Gresik.</p>
                            <div class="box-above">
                            Harga Tiket : Rp 5.000
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari 24 jam
                            </div>
                            <div class="box-above">
                            Lokasi :  Jl. Kapten Darmo Sugondo, Kec. Kebomas, Kabupaten Gresik, Jawa Timur
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="asset/ngipik.jpeg" class="img-thumbnail" alt="2 Hari">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Modal content for 2 Hari -->
                        <!-- Similar to Modal 1 but with relevant content -->
                    </div>
                    <div class="modal-footer">
                    <div class="modal-body">
                    <p>Salah satu wujud dari solusi pelestarian lingkungan hidup adalah pada sekitar tahun 2002 lubang raksasa tersebut dijadikan sebagai telaga yang bermanfaat bagi masyarakat luas. Sejak saat itu masyarakat dapat memancing ikan di pinggiran danau dengan duduk santai di bawah rerimbunan pohon penghijauan. Di Taman Bermain itu sudah ada Komunitas Mancing Mania, serta ada hiburan musik yang digelar pada hari-hari tertentu. Bagi mereka yang suka berfoto-foto di sini juga tersedia pemandangan danau yang sangat bagus. Warga juga bisa berwisata dengan naik perahu motor yang bisa menampung antara 10-12 orang.</p>
                            <div class="box-above">
                            Harga Tiket : Rp 0 (gratis)
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari 24 jam
                            </div>
                            <div class="box-above">
                            Lokasi : Jarangkuwung, Ngipik, Kec. Gresik, Kabupaten Gresik, Jawa Timur 61151
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 <!-- Modal 3 -->
 <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal1Title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="asset/Bukit Kapur Gosari.jpg" class="img-thumbnail" alt="3 Hari">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <strong>Hari Pertama</strong></ul>
                    <strong>1.Banyu Urip</strong>
                             <ul>
                            Lokasi:  Gresik, Jawa Timur
                            <li>Tiket Masuk: Sekitar Rp 5.000 per orang</li>
                        </ul>

                  <strong>2. Telaga Ngipik</strong>
                  <ul>
                      Lokasi: Gresik, Jawa Timur</li>
                      <li>Tiket Masuk: Sekitar Rp 10.000 per orang</li>
                  </ul>
                   
                  <strong>Hari Kedua</strong> </ul>
                 <strong>1. Bukit Kapur</strong>
                  <ul>
                    Lokasi: Gresik, Jawa Timur</li>
                      <li>Tiket Masuk: Sekitar Rp 10.000 per orang</li>
                  </ul>
                  <strong>2.Pantai Karng Kering</strong>
                  <ul>
                      Lokasi: Gresik, Jawa Timur</li>
                      <li>Tiket Masuk: Sekitar Rp 15.000 per orang</li>
                  </ul>
                  
                  <strong>Hari Ketiga</strong> </ul>
                 <strong>1. Makam Sunan Giri</strong>
                  <ul>
                    Lokasi: Gresik, Jawa Timur</li>
                      <li>Tiket Masuk: Gratis, namun sumbangan sukarela dapat diberikan</li>
                  </ul>
                  <strong>2.Dynasty Water World</strong>
                  <ul>
                      Lokasi: Gresik, Jawa Timur</li>
                      <li>Tiket Masuk: Sekitar Rp 25.000 per orang</li>
                  </ul>
                  <li> <strong>Transportasi</strong>
                         Anda dapat menggunakan mobil pribadi, taksi, atau menyewa mobil untuk perjalanan dari lokasi Anda ke destinasi wisata. Untuk transportasi lokal di sekitar destinasi, mungkin tersedia ojek atau angkutan umum.</li>
                        </ul>
                        <p>Perhatikan Keadaan Cuaca dan Jam Buka</p>
                        <ul>
                            <li>Wisata buka pukul 08.00-17.00 WIB.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </section>
    <!-- Section Packages End -->

    
<section class="Gallery" id="aboutus">
      
        
        <div class="main-txt">
          <h1><span>Gallery</span>Wisata</h1>
        
      <!-- Galerry -->
      <section id="gallery">
        <div><img src="asset/Banyu Urip Mangrove Center.png" /></div>
        <div><img src="asset/Bukit Kapur Sekapuk.png" /></div>
        <div><img src="asset/Giri kedaton.png" /></div>
        <div><img src="asset/Makam Sunan Syeikh Maulana Malik Ibrahim.png" /></div>
        <div><img src="asset/Masjid Jami'.png" /></div>
        <div><img src="asset/Masjid KH Ahmad Dahlan.png" /></div>
        <div><img src="asset/Pantai Delegan.png" /></div>
        <div><img src="asset/Wagos Wisata Alam Gosari.png" /></div>
      </section>

        <!-- Section Gallary Start -->
  <section class="gallary" id="gallary">
    <div class="container">
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="asset/Dynasty Water World.jpg" alt="" height="230px">
          </div>
        </div>
        
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="asset/bukitjamur.jpg" alt="" height="230px">
          </div>
        </div>
        
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="asset/Pulau Mengare.jpg" alt="" height="230px">
          </div>
        </div>
      </div>



  <!-- Section Gallary End -->
      
  <!-- CONCTat -->
        </section>
      </main>
      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            Jl. Proklamasi Biologi no. 12
          </div>
          <div>
            <h5>Contact</h5>
            Kelompok 10, Surabaya, Rungkut
            ~081249228875
            ~10Group.com
          </div>
          <div>
            <h5>Connect</h5>
            Instagram
          </div>
        </div>
    <script src="script.js"></script>
</body>
</html>