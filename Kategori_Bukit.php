<?php
include('config.php');

// Query to fetch data from the database where category is 'alam'
$query = "SELECT * FROM user_admin WHERE kategori = 'Bukit'";
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
                    <h1 class="masthead-heading mb-0">WISATA BUKIT</h1>
                    <h2>Panorama bukit dari ketinggian yang memukau dan tempat yang menenangkan jiwa untuk para petualang</h2>
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
                        <div class="p-5"><img class="img-thumbnail rounded-circle" src="asset/bukitjamurbaru.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Bukit Jamur</h2>
                            <p>Para wisatawan seringkali datang ke Bukit Jamur untuk menikmati pesona alam yang khas. Bukit Jamur terletak di area seluas 3 hektar. Beberapa tahun terkhir, Bukit Jamur menjadi magnet bagi pecinta alam dan fotografi dengan batuan uniknya yang membentuk jamur, hasil dari pengikisan alam selama bertahun-tahun. Hasilnya pun sangat estetik dan indah ketika difoto. Awalnya merupakan bekas area penambangan kapur yang tidak beroperasi. Bukit Jamur kini menjadi destinasi wisata yang memukau dengan sekitar 40 batu jamur, masing-masing memiliki tinggi yang bervariasi, mencapai ketinggian tertinggi 7 meter.</p> 
                            <div class="box-above">
                            Harga Tiket : Rp 0 (gratis)
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari, jam 06.00-17.00
                            </div>
                            <div class="box-above">
                            Lokasi : Area Sawah/Kebun, Bungah, Kec. Bungah, Kabupaten Gresik, Jawa Timur 61152
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
                        <div class="p-5"><img class="img-fluid rounded-circle" src="asset/Bukit Kapur Sekapuk.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Bukit Kapur Sekapuk Setigi</h2>
                            <p>Bukit Kapur Sekapuk Setigi awalnya merupakan area tambang batu kapur. Meski demikian, tidak akan mengganggu wisatawan. Setigi adalah kepanjangan dari selo, tirto, giri. Bahasa Sansekerta tersebut masing-masing berarti batu, air, gunung. Sedangkan Sekapuk, diambil dari nama desa di mana Bukit Kapur Setigi berada. Wisata ini digagas oleh Abdul Halim, Kepala Desa Sekapuk atau lebih dikenal Ki Begawan Setigi. Meski tempatnya perlu masuk jalan desa, tapi gak jauh dari jalan utama dan sudah dilengkapi papan petunjuk.</p>
                            <div class="box-above">
                            Harga Tiket : Rp 10.000-30.000
                            </div>
                            <div class="box-above">
                            Jam Buka : jam 08.00 s/d 17.00 WIB (Senin-Jumat), jam 08.00 s/d 18.00 WIB (Sabtu-Minggu)
                            </div>
                            <div class="box-above">
                            Lokasi : Desa, Area Sawah, Sekapuk, Kec. Panceng, Kabupaten Gresik, Jawa Timur 61154
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
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
        </section>
        </section>
        <!-- Content section 3-->
        <section>
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
