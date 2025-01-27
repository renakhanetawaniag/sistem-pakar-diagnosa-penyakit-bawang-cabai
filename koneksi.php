<?php  
// Membuat koneksi ke database
$host = 'localhost';  
$user = 'root';        
$password = '';        
$database = 'sp-bawang';    

// Membuka koneksi ke database
$konek_db = mysqli_connect($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$konek_db) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>