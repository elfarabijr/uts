<!DOCTYPE html>
<html>
<head>
    <title>UAS | JUMARI</title>
</head>
<body>
<a href="daftar.php"> <button><- KEMBALI</button></a>
<h3 style="color: #ca1">Form edit Buku</h3>
<form action="update.php" method="post">
    <table>
        <?php 
        include 'koneksi.php';

        $kd = $_GET['kode'];
        $sql = "select * from TbBuku where KodeBuku = '$kd' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {  ?>
                <tr>
                    <input type="hidden" class="form-control"  name="kode" value="<?= $row['KodeBuku'] ?>">
                    <td><label for="kode">Judul Buku </label></td>
                    <td><label for="kode">:</label></td>
                    <td><input type="text"  class="form-control" name="judul" placeholder="nama barang.." required="required" value="<?= $row['JudulBuku'] ?>"></label></td>
                </tr>
                <tr>
                    <td><label for="kode">Nama Pengarang</label></td>
                    <td><label for="kode">:</label></td>
                    <td><input type="text"  class="form-control" name="pengarang"  required="required" value="<?= $row['NamaPengarang'] ?>"></label></td>
                </tr>
                <tr>
                    <td><label for="kode">Jumlah Buku </label></td>
                    <td><label for="kode">: </label></td>
                    <td><input type="number"  class="form-control" name="jumlah" value="<?= $row['Jumlah'] ?>"></label></td>
                </tr>
                <tr>
                    <td><button type="submit" class="button">Update</button></td>
                </tr>    
                <?php } } else {
                    echo "DATA TIDAK DITEMUKAN!";
                }

                mysqli_close($conn); ?>
            </table>
        </form>

</body>
</html>