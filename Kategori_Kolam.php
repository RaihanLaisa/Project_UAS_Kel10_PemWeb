<?php
include('config.php');

$query = "SELECT * FROM user_admin WHERE kategori = 'Renang'";
$hasil = mysqli_query($conn, $query);

if (!$hasil) {
    die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
}

// Fetch the column names
$columns = array();
$result = mysqli_query($conn, "SHOW COLUMNS FROM user_admin");
while ($row = mysqli_fetch_assoc($result)) {
    $columns[] = $row['Field'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#!">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Log In</a></li>
                    </ul>
                </div>
            </div> -->
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">WISATA WATERBOOM</h1>
                    <h2 >Petualangan Air yang segar dan menyenangkan nikmati keseruan bersantai di kolam renang terbaik</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">More</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
         <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-thumbnail rounded-circle" src="asset/kolamawan.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Bukit Awan Waterpark</h2>
                            <p>Bukit Awan Waterpark adalah destinasi wisata yang sempurna untuk bermain air dan merasakan keseruan basah-basahan, merupakan pilihan tepat bagi Anda yang mencari pengalaman liburan yang menyegarkan. Wisata Bukit Awan Waterpark ini menawarkan berbagai fasilitas kolam dan wahana yang menarik untuk dinikmati oleh pengunjung dari berbagai kalangan. Tempat wisata ini ramai dengan wisatawan pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas kita sehari-hari. Wisata Bukit Awan Waterpark Gresik sangat cocok untuk mengisi kegiatan saat liburan panjang seperti libur nasional, ataupun hari libur lainnya.</p>
                            <div class="box-above">
                            Harga Tiket : Rp 50.000 (Senin-Jumat), Rp 75.000 (Sabtu-Minggu)
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari, jam 09.00-17.00
                            </div>
                            <div class="box-above">
                            Lokasi : Jl. Mojokerto - Surabaya No. 35, Kecamatan Kebomas, Kabupaten Gresik
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="asset/dynastywaterworld.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Dynasty Water World</h2>
                            <p>Tempat wisata ini disuguhkan dengan wahana air yang sangat menyenangkan dengan berbagai jumlah kolam renang sesuai kedalaman untuk anak-anak ataupun orang dewasa. Di saat nuansa liburan tentunya wisata water world ini menjadi tempat andalan liburan banyak orang. Wisata ini juga sangat cocok untuk berlibur bersama keluarga ataupun kerabat karena memiliki berbagai wahana wisata air yang asyik dilengkapi dengan berbagai fitur tempat wisata seperti restauran, toilet, gazebo, dan lainnya.</p>
                            <div class="box-above">
                            Harga Tiket : Rp 25.000 (Selasa-Sabtu), Rp 40.000 (Minggu dan Hari Libur)
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari, jam 09.00-17.00 WIB
                            </div>
                            <div class="box-above">
                            Lokasi : Jl. Rantau I no 27-29, Yosowilangun, Manyar, Gresik
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="asset/Bajak Laut.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Bajak Laut</h2>
                            <p>Wisata Bajak Laut Gresik adalah sebuah wisata air dengan mengambil konsep sarang bajak laut. Tempat ini sebenarnya berupa kolam renang atau water boom kecil, hanya saja penataannya yang bagus membuat wisata ini menjadi salah satu destinasi wisata yang patut diperhitungkan saat kita berada di Gresik. Berlokasi di desa Masangan, Bungah, Gresik,  tempat ini tidak jauh dari pusat kota Gresik. Meski demikian lokasinya bisa dikatakan agak terpencil karena berada di area kebun. Lokasinya juga berada di tempat yang tinggi, jadi dapat menyaksikan pemandangan yang ada di sekitarnya.</p>
                            <div class="box-above">
                            Harga Tiket : Rp 15.000 (Senin-Jumat), Rp 20.000 (Hari Libur & weekend)
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari, jam 08.00-17.00 WIB
                            </div>
                            <div class="box-above">
                            Lokasi : Wisata Bajak Laut. Area Sawah/Kebun, Masangan, Bungah, Kabupaten Gresik, Jawa Timur 61152
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                <?php
            $sectionCount = 1;
            while ($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
                $foto = htmlspecialchars($data['foto']);
                $nama_wisata = htmlspecialchars($data['nama_wisata']);
                $deskripsi_wisata = htmlspecialchars($data['deskripsi_wisata']);

                if ($sectionCount % 2 == 0) {
                    echo '<div class="row gx-5 align-items-center">';
                    echo '<div class="col-lg-6"><div class="p-5"><img class="img-fluid rounded-circle" src="foto/' . $foto . '" alt="Image" /></div></div>';
                    echo '<div class="col-lg-6"><div class="p-5">';
                } else {
                    echo '<div class="row gx-5 align-items-center">';
                    echo '<div class="col-lg-6 order-lg-2"><div class="p-5"><img class="img-fluid rounded-circle" src="foto/' . $foto . '" alt="Image" /></div></div>';
                    echo '<div class="col-lg-6 order-lg-1"><div class="p-5">';
                }
                echo '<h2 class="display-4">' . $nama_wisata . '</h2>';
                echo '<p>' . $deskripsi_wisata . '</p>';

                // Dynamically display other fields
                foreach ($columns as $column) {
                    if ($column != 'foto' && $column != 'nama_wisata' && $column != 'deskripsi_wisata' && $column != 'kategori') {
                        $value = htmlspecialchars($data[$column]);
                        echo '<div class="box-above">' . ucfirst(str_replace('_', ' ', $column)) . ': ' . $value . '</div>';
                    }
                }

                echo '</div></div></div>';
                $sectionCount++;
            }
            ?>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">DESKRIPSI WISATA &copy; </p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
