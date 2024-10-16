<?php
require "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoesLaundry</title>
    <link rel="stylesheet" href="styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&family=Spicy+Rice&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
</head>

<body onload="hidePreloader()">

    <div id="preloader">
        <img src="assets/preloading.gif" alt="preloader">
    </div>

    <nav id="navbar" class="navbar">
        <div class="container">
            <a class="logo-img" href="index.php">
                <img src="assets/logo-nav.png" alt="logoo" class="logoo" width="50" height="50">
            </a>
            <h1>ShoesLaundry.id</h1>
            <div class="nav-links">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Order</a></li>
                    <li><a href="login.php" class="button"> Login </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="background"></div>
        <div class="overlay"></div>
        <h2>Shoes Laundry</h2>
        <p>~Find more about us here~</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="services-box">
                <img src="assets/about1.png" alt="about1">
                <p><b> CLEANING </b><br>
                    Treatment pencucian untuk menghilangkan noda dan aman untuk semua bahan.
                </p>
            </div>
            <div class="services-box">
                <img src="assets/about2.png" alt="about2">
                <p><b> REPAINT </b><br>
                    Treatment pewarnaan ulang/penggantian warna untuk mencerahkan kembali warna sepatu anda
                </p>
            </div>
            <div class="services-box">
                <img src="assets/about3.png" alt="about3">
                <p><b> OTHERS </b><br>
                    Konsultasikan masalah sepatu, tas kalian langsung pada tim kami.
                </p>
            </div>
        </div>
    </section>

    <section id="about">
        <h2>About Us</h2>
    </section>

    <section id="contact">
        <h2>Order Here :</h2>
        <form method="POST" action="fungsi.php" enctype="multipart/form-data">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="nama" required>
            <br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>

            <label for="message">Pesan:</label>
            <textarea id="message" name="pesan" required></textarea>
            <br>

            <label for="foto">Foto Sepatu:</label>
            <input type="file" id="foto" name="foto" required>
            <br>

            <input class="button" type="submit" value="KIRIM" name="tambah">
        </form>
    </section>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>

    
    <script src="script.js"></script>
</body>

</html>