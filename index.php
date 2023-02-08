<!DOCTYPE html>
<html>
<head>
	<title>Battle Insert Data</title>
</head>
<body>

<?php 

	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "sukses") {
			echo "DATA BERHASIL DATAMBAHKAN";
		}
	}

?>

<form action="crud_siswa.php?pg=tambah" method="POST">
	<input type="text" name="nama" placeholder="Masukan Nama">
	<br>
	<input type="text" name="kelas" placeholder="Masukan Kelas">
	<br>
	<input type="text" name="jurusan" placeholder="Masukan Jurusan">
	<br>
	<button type="submit">SIMPAN</button>
</form>

<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jurusan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include "koneksi.php";
		$no=0;
			$query = mysqli_query($koneksi, "SELECT * From siswa");
			while ($siswa = mysqli_fetch_array($query)) {
			$no++;
		?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $siswa['nama'] ?></td>
			<td><?= $siswa['kelas'] ?></td>
			<td><?= $siswa['jurusan'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>

</body>
</html>