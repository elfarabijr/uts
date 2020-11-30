<?php 

include 'koneksi.php';

// menangkap data yang di kirim dari form
$kode = $_POST['kode'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jumlah = $_POST['jumlah'];


// menginput data ke database
$query = "update TbBuku set JudulBuku='$judul', NamaPengarang = '$pengarang', Jumlah = '$jumlah' where KodeBuku = '$kode'";
mysqli_query($conn, $query);

mysqli_close($conn);
 
// mengalihkan halaman kembali ke index.php
header("location:daftar.php");


?>