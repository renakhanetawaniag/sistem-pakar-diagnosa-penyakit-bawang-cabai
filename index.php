<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f0;
        /* Warna alam seperti daun muda */
    }


    nav .navbar-nav .nav-link {
        position: relative;
        transition: all 0.3s ease-in-out;
    }

    nav .navbar-nav .nav-link:hover {
        color: #d84315 !important;
        /* Warna merah cabai saat hover */
        text-decoration: none;
        /* Menghapus underline */
    }

    nav .navbar-nav .nav-link:hover::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 100%;
        height: 2px;
        background-color: #d84315;
        /* Garis bawah merah cabai */
        transition: all 0.3s ease-in-out;
        opacity: 1;
    }

    nav .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 0;
        height: 2px;
        background-color: #d84315;
        /* Garis bawah merah cabai */
        transition: all 0.3s ease-in-out;
        opacity: 0;
    }

    nav .navbar-nav .nav-link {
        position: relative;
        transition: all 0.3s ease-in-out;
    }

    nav .navbar-nav .nav-link:hover {
        color: #d84315 !important;
        /* Warna merah cabai saat hover */
        text-decoration: none;
        /* Menghapus underline */
    }

    nav .navbar-nav .nav-link:hover::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 100%;
        height: 2px;
        background-color: #d84315;
        /* Garis bawah merah cabai */
        transition: all 0.3s ease-in-out;
        opacity: 1;
    }

    nav .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 0;
        height: 2px;
        background-color: #d84315;
        /* Garis bawah merah cabai */
        transition: all 0.3s ease-in-out;
        opacity: 0;
    }


    nav {
        background-color: #558b2f;
        /* Hijau daun bawang */
    }

    nav .navbar-brand {
        font-weight: bold;
        color: white;
    }

    nav .nav-link {
        color: white !important;
    }

    body {
        padding-top: 70px;
        /* Sesuaikan dengan tinggi navbar */
    }


    .carousel-image {
        width: 100%;
        /* Gambar akan selalu selebar kontainer */
        height: 80vh;
        /* Mengatur tinggi gambar menjadi 80% dari viewport height */
        object-fit: cover;
        /* Memastikan gambar memenuhi kontainer tanpa distorsi */
        object-position: center;
        /* Memusatkan area gambar yang dipotong */
    }


    .hero {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        text-align: center;
        position: relative;
    }

    .hero .carousel-inner img {
        height: 100vh;
        object-fit: cover;
        filter: brightness(0.8);
    }

    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .hero p {
        font-size: 1.2rem;
    }

    .btn-primary {
        background-color: #d84315;
        /* Warna merah cabai */
        border: none;
    }

    .features-section {
        padding: 60px 0;
    }

    .features-section .feature-box {
        text-align: center;
        padding: 20px;
        transition: all 0.3s ease-in-out;
        background-color: #ffffff;
    }

    .features-section .feature-box:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    footer {
        background-color: #558b2f;
        color: white;
        text-align: center;
        padding: 20px 0;
    }

    .navbar-brand img {
        height: 50px;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/eta.png" alt="Logo Sistem Pakar" style="height: 50px;">
                Sistem Pakar
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#diagnosa">Diagnosa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section with Slider -->
    <section class="hero" id="beranda">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/slide2.jpg" class="d-block w-100 carousel-image" alt="Field of Onions">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slide1.jpg" class="d-block w-100 carousel-image" alt="Chili Plantation">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slide3.jpg" class="d-block w-100 carousel-image" alt="Farm View">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container position-absolute top-50 start-50 translate-middle text-center">
            <h1>Sistem Pakar Diagnosa Hama dan Penyakit</h1>
            <p>Solusi modern untuk membantu petani mengatasi hama dan penyakit pada tanaman bawang merah dan cabai.</p>
            <a href="#diagnosa" class="btn btn-primary btn-lg mt-4">Diagnosa Sekarang</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container text-center">
            <h2 class="mb-5">Fitur Utama</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow rounded p-4">
                        <i class="fa-solid fa-bug fa-2x text-primary mb-3"></i>
                        <h5>Deteksi Hama</h5>
                        <p>Sistem mendeteksi jenis hama yang menyerang tanaman Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow rounded p-4">
                        <i class="fa-solid fa-leaf fa-2x text-primary mb-3"></i>
                        <h5>Informasi Penyakit</h5>
                        <p>Database penyakit tanaman bawang merah dan cabai lengkap dengan solusi.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow rounded p-4">
                        <i class="fa-solid fa-graduation-cap fa-2x text-primary mb-3"></i>
                        <h5>Pembelajaran</h5>
                        <p>Media pembelajaran bagi petani dan masyarakat agrikultur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diagnosa Section -->
    <section id="diagnosa" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Mulai Diagnosa</h2>
            <p>Silakan klik tombol di bawah ini untuk memulai diagnosa hama atau penyakit pada tanaman Anda.</p>
            <a href="diagnosa.php" class="btn btn-primary btn-lg">Mulai Diagnosa</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="tentang" class="py-5">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>Kami adalah penyedia solusi berbasis sistem pakar untuk membantu Anda mendiagnosis penyakit tanaman
                secara cepat dan akurat.</p>
            <p>Tujuan kami adalah memberikan informasi yang tepat kepada petani dan ahli agronomi untuk meningkatkan
                hasil pertanian.</p>
            <a href="mailto:info@sistempakar.com" class="btn btn-primary">Hubungi Kami</a>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <p></p>
        <p>&copy; FT UGP - Rena Khanetawani AG, 2025</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#myBtn").click(function() {
            $("#myModal").modal();
        });
    });
    </script>
</body>

</html>