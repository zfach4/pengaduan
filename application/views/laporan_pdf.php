<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<h1 style="text-align: center">Data Pengaduan</h1>
	<hr>
	<br>
		<table class="table" border="1 solid">
		<tr>
			<th>No</th>
			<th>Jenis Aduan</th>
			<th>Deskripsi</th>
			<th>File</th>
			<th>Tanggal</th>
			<th>Keterangan</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($pengaduan as $aduan): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $aduan->jenis_aduan ?></td>
			<td><?php echo $aduan->deskripsi ?></td>
			<td class="text-center">
	    		<?php echo $aduan->file ?>
	    	</td>
			<td><?php echo $aduan->tanggal ?></td>
			<td><?php echo $aduan->keterangan ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</body></html>