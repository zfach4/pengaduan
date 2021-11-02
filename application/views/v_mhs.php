<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

	<table border="1px solid black">
		
		<tr>
			<th>Nama Mahasiswa</th>
			<th>NIM</th>
			<th>Alamat</th>
		</tr>

		<?php foreach ($mahasiswa as $mhs) : ?>

			<tr>
				<td><?php echo $mhs['nama']; ?></td>
				<td><?php echo $mhs['nim']; ?></td>
				<td><?php echo $mhs['alamat']; ?></td>
			</tr>

		<?php endforeach; ?>
	</table>

</body>
</html>