<?php
include 'koneksi.php';

$kode = $_POST['kode'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jumlah = $_POST['jumlah'];

// menginput data ke database
$query = "insert into TbBuku(KodeBuku,JudulBuku,NamaPengarang,Jumlah) values('$kode','$judul','$pengarang','$jumlah')";
$simpan = mysqli_query($conn, $query);

if (!$simpan) {
  die("Gagal menyimpan Data ");
}

mysqli_close($conn);
 
// mengalihkan halaman kembali ke index.php
header("location:daftar.php");
alert('Dara Berhasil Disimpan');

?>