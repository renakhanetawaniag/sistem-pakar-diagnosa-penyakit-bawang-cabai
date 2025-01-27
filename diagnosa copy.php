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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f0;
    }

    nav {
        background-color: #558b2f;
    }

    nav .navbar-brand {
        font-weight: bold;
        color: white;
    }

    nav .nav-link {
        color: white !important;
        transition: all 0.3s ease-in-out;
    }

    nav .nav-link:hover {
        color: #d84315 !important;
        text-decoration: none;
    }

    nav .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 0;
        height: 2px;
        background-color: #d84315;
        transition: all 0.3s ease-in-out;
        opacity: 0;
    }

    nav .nav-link:hover::after {
        width: 100%;
        opacity: 1;
    }

    .sidenav {
        background-color: #ffffff;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .sidenav button {
        margin-bottom: 10px;
    }

    .sidenav button.active {
        background-color: #d84315;
        color: white;
    }

    .sidenav button:hover {
        background-color: #f9b9a3;
    }

    .btn-primary {
        background-color: #d84315;
        border: none;
    }

    .btn-primary:hover {
        background-color: #f16a4f;
    }

    footer {
        background-color: #558b2f;
        color: white;
        text-align: center;
        padding: 20px 0;
        margin-top: 20px;
    }

    .panel-info .panel-heading {
        background-color: #d84315;
        color: white;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
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
        <p>S1-Sistem Informasi 2013</p>
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