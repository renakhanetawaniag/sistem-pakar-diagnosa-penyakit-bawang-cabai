<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Pakar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                <p><a href="index.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
                <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block active">DIAGNOSA
                            PENYAKIT</button></a></p>
                <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block">DAFTAR
                            PENYAKIT</button></a></p>
                <p><a href="about.php"><button type="button" class="btn btn-primary btn-block">ABOUT</button></a></p>
                <br><br><br><br><br><br><br><br><br><br>
                <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
            </div>
            <div class="col-sm-8 text-left">
                <center>
                    <h2>DIAGNOSA PENYAKIT</h2>
                </center>
                <form id="form1" name="form1" method="post" action="diagnosa.php">
                    <label for="sel1">Jenis Tanaman</label>
                    <select class="form-control" name="tanaman" onChange='this.form.submit();'>
                        <option value="">Pilih Jenis Tanaman</option>
                        <option value="Bawang">Bawang</option>
                        <option value="Cabai">Cabai</option>

                    </select>
                </form>
                <br>
                <form id="form2" name="form2" method="post" action="diagnosa.php">
                    <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                echo  "<br><label>AKAR</label><br>";
 			$tampil="select * from gejala where daerah='akar' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>
                    <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                       echo  "<br><label>BATANG</label><br>";
 			$tampil="select * from gejala where daerah='batang' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>

                    <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                     echo  "<br><label>DAUN</label><br>";
 			$tampil="select * from gejala where daerah='daun' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>
                    <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                      echo  "<br><label>BUAH/UMBI</label><br>";
 			$tampil="select * from gejala where daerah='Buah/Umbi' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>
                    <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                      echo  "<br><label>BUNGA</label><br>";
 			$tampil="select * from gejala where daerah='bunga' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>
                    <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                      echo  "<br><label>BIJI</label><br>";
 			$tampil="select * from gejala where daerah='biji' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>

                    <br>
                    <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary">CEK
                        PENYAKIT</button><br><br>
                    <div class="panel panel-info">
                        <div class="panel-heading">HASIL DIAGNOSA</div>
                        <div class="panel-body">
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID PENYAKIT</th>
                                            <th>Nama Penyakit</th>
                                            <th>Jenis Tanaman</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <?php			
        if (isset($_POST['submit'])) {
            $gejala = $_POST['gejala'];
            $jumlah_dipilih = count($gejala);
            for ($x = 0; $x < $jumlah_dipilih; $x++) {
                $tampil = "SELECT DISTINCT p.idpenyakit, p.namapenyakit, p.jenistanaman 
                           FROM basispengetahuan b, penyakit p 
                           WHERE b.gejala='$gejala[$x]' AND p.namapenyakit=b.namapenyakit 
                           GROUP BY p.idpenyakit, p.namapenyakit, p.jenistanaman";
                $result = mysqli_query($konek_db, $tampil);
                while ($hasil = mysqli_fetch_array($result)) {
                    echo "
                        <tr>  
                            <td>" . ($x + 1) . "</td>
                            <td>" . $hasil['idpenyakit'] . "</td>
                            <td>" . $hasil['namapenyakit'] . "</td>  
                            <td>" . $hasil['jenistanaman'] . "</td> 
                            <td><a href=\"hasildiagnosa.php?id=" . $hasil['idpenyakit'] . "\"><i class='glyphicon glyphicon-search'></i></a></td>
                        </tr>";
                }
            }
        }
        
    
    
                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="post" action="ceklogin.php">
                        <div class="form-group" method="post">
                            <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="text" class="form-control" name="username" id="password"
                                placeholder="Enter username">
                        </div>
                        <div class="form-group" method="post">
                            <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Enter password">
                        </div>
                        <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block"
                            method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <p>&copy; FT UGP - Rena Khanetawani AG, 2025</p>
    </footer>
    <script language="JavaScript" type="text/javascript">
    $(document).ready(function() {
        $("#myBtn").click(function() {
            $("#myModal").modal();
        });
    });

    function checkDiagnosa() {
        return confirm('Apakah sudah benar gejalanya?');
    }
    </script>

</body>

</html>