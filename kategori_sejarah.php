<?php
include('config.php');

// Query to fetch data from the database where category is 'alam'
$query = "SELECT * FROM user_admin WHERE kategori = 'Sejarah'";
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
                    <h1 class="masthead-heading mb-0">WISATA SEJARAH</h1>
                    <h2>Mari bersama menjelajahi jejak-jejak sejarah yang penuh makna dan keindahan</h2>
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
                        <div class="p-5"><img class="img-thumbnail rounded-circle" src="asset/Giri kedaton potong.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Giri Kedaton</h2>
                            <p>Kedaton (istana) atau pusat pemerintahan era Giri I yaitu Sunan Giri atau Raden Paku atau Raden Ainul Yaqin yang diteruskan secara turun temurun oleh para keturunannya. Giri Kedaton didirikan oleh Sunan Giri pada sekitar tahun 1487 M di Kota Gresik. Dipilihnya lokasi tersebut sebagai Kedaton Giri berdasarkan petunjuk Syeck Maulana Iskhak (Ayah Sunan Giri) atas dasar kes amaan segenggam tanah yang dibawa dari Samudra Pasai. </p>
                             <div class="box-above">
                                Harga Tiket : Rp 0 (gratis)
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari 24 jam
                            </div>
                            <div class="box-above">
                            Lokasi : Jl. Sunan Giri XIII, Pedukuhan, Kebomas, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61124, Indonesia
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="asset/makamsunan.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Makam Sunan Giri</h2>
                            <p>Sunan Giri merupakan putera dari Syekh Maulana lshaq dan Dewi Sekardadu (putri Raja Blambangan, Menak Sembuyu) yang lahir pada Tahun 7442 M, Sunan Giri wafat pada tahun 7506 M dan dimakamkan diatas bukit dalam cungkup berarsitektur khas Jawa yang sangat unik. Area makam ini sangat luas dan teduh karena dipenuhi dengan pepohonan berdaun rimbun di sekitarnya. Kawasan makam ini terbagi menjadi 3 bagian, yaitu area pintu masuk, area gapura, dan area inti, yaitu makam sunan.</p>
                            <div class="box-above">
                            Harga Tiket : Rp 0 (gratis)
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari 24 jam
                            </div>
                            <div class="box-above">
                            Lokasi : Jalan Sunan Giri, Dusun Giri Gajah, Desa Giri, Kecamatan Kebomas, Kabupaten Gresik, Jawa Timur
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
                        <div class="p-5"><img class="img-fluid rounded-circle" src="asset/sitifatimah.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Makam Siti Fatimah binti Maimun</h2>
                            <p>Makam Fatimah binti Maimun diambil alih oleh Balai Pelestarian Peninggalan Purbakala (BP3) Jawa Timur. Area makam tersebut juga tidak diperbolehkan lagi untuk menjadi pemakaman umum, karena pemerintah menjadikannya sebagai situs cagar budaya. Makam Siti Fatimah berada di dalam kelambu, arsitekturnya juga mengikuti corak Hindu Budha sesuai dengan kerajaan yang berkuasa, saat ia meninggal. Gaya arsitektur dari makam Siti Fatimah binti Maimun yang ditemukan di daerah pantai utara Leran ini dipengaruhi oleh pengaruh kerajaan yang pada waktu itu masih sangat kuat.</p>
                                <div class="box-above">
                                Harga Tiket : Rp 0 (gratis)
                                </div>
                                <div class="box-above">
                                Jam Buka : Setiap hari 24 jam
                                </div>
                                <div class="box-above">
                                Lokasi : Jl. Raya Manyar, Pesantren, Peganden, Kec. Manyar, Kabupaten Gresik, Jawa Timur 61151</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 4-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="asset/makamibrahim.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Makam Sunan Syeikh Maulana Malik Ibrahim</h2>
                            <p>Sunan Maulana Malik Ibrahim merupakan nama asli dari Sunan Gresik dan sebagai pemimpin para Wali Songo serta wali tertua. Sunan Maulana Malik Ibrahim juga dikenal dengan Makdum Ibrahim As-Samarkandy. Ia diperkirakan lahir di Samarkand, Asia Tengah, pada abad ke-14. Adapula yang berpendapat bahwa Sunan Maulana Malik Ibrahim berasal dari Magribi atau Maroko, Afrika Utara. Cara dakwah Sunan Maulana Malik Ibrahim memberikan pengobatan gratis dan berdagang. Sunan Maulana Malik Ibrahim wafat pada tanggal 12 Rabiul Awal 822 H (1419 M), selanjutnya tanggal tersebut diperingati sebagai haul yang diikuti oleh jamaah lokal, regional, maupun nusantara.</p>
                        <div class="box-above">
                        Harga Tiket : Rp 0 (gratis)
                        </div>
                        <div class="box-above">
                        Jam Buka : Setiap hari 24 jam
                        </div>
                        <div class="box-above">
                        Lokasi : Jl. Jalan Malik Ibrahim Nomor 52-62, Gapuro Sukolilo, Bedilan, Gresik
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="scroll">
            <div class="container px-5">
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
