<!DOCTYPE html>
<html>
<head>
	<title>UAS | JUMARI</title>
</head>
<body>
	<h2 style="color: #87CEFA">DAFTAR BUKU</h2>
	<hr>
	<a href="index.php"><button>Back To Home</button> </a>
	<br>
	<br>
	<table class="tabel" border="2">
		<thead>
			<th>No.</th>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Nama Pengarang</th>
			<th>Jumlah Buku</th>
			<th colspan="2">Action</th>
		</thead>
		<tbody>
			<?php 
			include 'koneksi.php'; 
			$sql = "select * from TbBuku";
			$result = mysqli_query($conn, $sql);
			$no = 1;
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $row["KodeBuku"] ?></td>
						<td><?= $row["JudulBuku"] ?></td>
						<td><?= $row["NamaPengarang"] ?></td>
						<td><?= $row["Jumlah"] ?></td>
						<td>
							<a href="form_ubah.php?kode=<?= $row['KodeBuku']; ?>" ><button>ubah</button> </a>
						</td>
						<td>
							<a href="hapus.php?kode=<?php echo $row['KodeBuku']; ?>" onclick="return confirm('Yakin Hapus?')"><button>hapus</button> </a>
						</td>
					</tr>
					<?php $no++;	}
				} else { ?>
					<tr>
						<td colspan="6">-- BELUM ADA DATA --</td>
					</tr>
				<?php }

				mysqli_close($conn);

				?>
			</tbody>
		</table>

	</body>
	</html>