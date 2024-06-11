<?php

use LDAP\Result;

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<header>
    <h1>Admin Page - Gresik Discovery</h1>
    <div class="layar-dalam">
        <div class="logo">
            <a href=""><img src="asset/GSK_D-White.png" class="putih" /></a>
        </div>
</header>
<nav>
    <a href="#">Beranda</a>
    <a href="table.php">Paket Wisata</a>
    <a href="transaksi.php">Transaksi</a>
    <a href="pemesanan.php">Pemesanan Tiket</a>
    <a href="logout.php">Logout</a>
</nav>

<div>
  <canvas id="myChart"></canvas>
</div>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<footer id="contact">
    <div class="layar-dalam">
        <div>
            <h5>Info</h5>
            <p>Jl. Proklamasi Biologi no. 12</p>
        </div>
        <div>
            <h5>Contact</h5>
            <p>Kelompok 10, Surabaya, Rungkut</p>
            <p>081249228875</p>
            <p>10Group.com</p>
        </div>
        <div>
            <h5>Connect</h5>
            Instagram
        </div>
    </div>
    <div class="layar-dalam">
        <div class="copyright">&copy; 2024 Gresik Discovery</div>
    </div>
</footer>

</body>
</html>