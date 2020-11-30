<?php 
// isi nama host, username mysql, dan password mysql anda
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtokobuku";

$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
  die("koneksi gagal : " . mysqli_connect_error());
}

?>