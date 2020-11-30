<?php 

include 'koneksi.php';

// menangkap data yang di kirim dari form
$kd = $_GET['kode'];

 
// menginput data ke database
$query = "delete from TbBuku where KodeBuku = '$kd'";
mysqli_query($conn, $query);

mysqli_close($conn);
 
// mengalihkan halaman kembali ke index.php
header("location:daftar.php");

?>