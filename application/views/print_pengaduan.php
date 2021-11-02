<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Print Laporan Pengaduan</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link href="https://fontawesome.com/" rel="stylesheet">

</head>
<body>
	<table class="table">
		<thead align="center">
			<tr>
				<th>No</th>
				<th>Jenis Aduan</th>
				<th>Deskripsi</th>
				<th>File</th>
				<th>Tanggal</th>
				<th>File</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($pengaduan as $aduan): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $aduan->jenis_aduan ?></td>
				<td><?php echo $aduan->deskripsi ?></td>
				<td class="text-center">
					<img src="<?php echo base_url(); ?>assets/file/<?php echo $aduan->file; ?>" width="90" height="110" alt="<?php echo $aduan->file ?>">
				</td>
				<td><?php echo $aduan->tanggal ?></td>
				<td>
	    			
	    		</td>
				<td><?php echo $aduan->keterangan ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<script type="text/javascript">
	window.print();
</script>

</body>
</html>