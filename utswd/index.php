<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UAS | Jumari</title>
</head>
<body style="background-color: rgba(0,0,0,0.2);">
	<a href="daftar.php"><button>LIST BUKU</button></a> 
	<hr>
    <h3 style="color: white">Form Tambah Buku</h3>
    <form action="simpan.php" method="post">
        <table>
        <tr>
            <td><label for="kode">Kode Buku </label></td>
            <td><label for="kode">:</label></td>
            <td><input type="text" class="form-control"  name="kode" placeholder="kode buku.." required="required"></label></td>
        </tr>
        <tr>
            <td><label for="kode">Judul Buku </label></td>
            <td><label for="kode">:</label></td>
            <td><input type="text"  class="form-control" name="judul" placeholder="judul Buku.." required="required"></label></td>
        </tr>
        <tr>
            <td><label for="kode">Nama Pengarang</label></td>
            <td><label for="kode">:</label></td>
            <td><input type="text"  class="form-control" name="pengarang"  required="required" placeholder="nama pengarang.."></label></td>
        </tr>
        <tr>
            <td><label for="kode">Jumlah Buku </label></td>
            <td><label for="kode">: </label></td>
            <td><input type="number" required="" class="form-control" name="jumlah" placeholder="jumlah.."></label></td>
        </tr>
        <tr>
            <td><button type="submit" class="button">Simpan</button></td>
        </tr>    

      </table>
    </form>
</body>
</html>