<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Pakar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    /* Warna tema alam */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f6;
    }

    /* Navbar */
    .navbar-inverse {
        background-color: #558b2f;
        /* Hijau daun bawang */
        border-color: #558b2f;
    }

    .navbar-inverse .navbar-brand,
    .navbar-inverse .navbar-nav>li>a {
        color: white !important;
    }

    /* Tombol dan Sidenav */
    .btn-primary {
        background-color: #d84315;
        /* Merah cabai */
        border-color: #d84315;
    }

    .btn-primary:hover {
        background-color: #bf360c;
        /* Merah cabai gelap */
        border-color: #bf360c;
    }

    .sidenav {
        background-color: #f9f9f6;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .sidenav button {
        background-color: #558b2f;
        color: white;
    }

    .sidenav button.active {
        background-color: #33691e;
        /* Hijau daun tua */
    }

    /* Heading */
    h2 {
        color: #d84315;
        /* Merah cabai */
    }

    /* Panel */
    .panel-info>.panel-heading {
        background-color: #d84315;
        /* Merah cabai */
        color: white;
    }

    /* Table */
    table th {
        background-color: #558b2f;
        /* Hijau daun bawang */
        color: white;
    }

    /* Footer */
    footer {
        background-color: #33691e;
        /* Hijau tua */
        color: white;
        padding: 10px 0;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="homeadmin.php"><button type="button"
                            class="btn btn-primary btn-block active">BERANDA</button></a></p>
                <p><a href="hamadanpenyakit.php"><button type="button" class="btn btn-primary btn-block">HAMA dan
                            PENYAKIT</button></a></p>
                <p><a href="gejala.php"><button type="button" class="btn btn-primary btn-block">GEJALA</button></a></p>
                <p><a href="basispengetahuan.php"><button type="button" class="btn btn-primary btn-block">BASIS
                            PENGETAHUAN</button></a></p>
                <br><br><br><br><br><br><br><br><br><br>
                <p><a href="logout.php"><button type="button" class="btn btn-primary btn-block"
                            id="myBtn">LOGOUT</button></a></p>
            </div>
            <div class="col-sm-8 text-left">
                <center>
                    <h2>SISTEM PAKAR DIAGNOSA HAMA DAN PENYAKIT TANAMAN BAWANG MERAH DAN CABAI
                    </h2>
                </center><br>
                <p>Selamat datang <?php echo $login_session; ?>.Silahkan pilih menu yang diinginkan</p>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>&copy; FT UGP - Rena Khanetawani AG, 2025</p>
    </footer>

</body>

</html>