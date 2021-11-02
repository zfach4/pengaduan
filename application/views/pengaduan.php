<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Layanan Pengaduan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah aduan</button>

    	<a href="<?php echo base_url('pengaduan/print') ?>" class="btn btn-danger"><i class="fa fa-print"> Print</i></a>

    	<a href="<?php echo base_url('pengaduan/pdf') ?>" class="btn btn-warning"><i class="fa fa-file"> Export PDF</i></a>

    	<table class="table">
    		<thead align="center">
    			<tr>
    				<th>Tandai</th>
	    			<th>No</th>
	    			<th>Aduan</th>
	    			<th>Deskripsi</th>
	    			<th>File</th>
	    			<th>Tanggal</th>
	    			<th>Keterangan</th>
	    			<th colspan="2">Aksi</th>
	    		</tr>
    		</thead>
    		<tbody>
    			<?php 
	    		$no = 1;
	    		foreach ($pengaduan as $aduan) : ?>
	    		<tr>
	    			<td class="text-center">
	    				<input type="checkbox" class="form-control" name="checkbox_value" value="<?php $aduan->id ?>">
	    			</td>
	    			<td><?php echo $no++ ?></td>
	    			<td><?php echo $aduan->jenis_aduan ?></td>
	    			<td><?php echo $aduan->deskripsi ?></td>
	    			<td class="text-center">
	    				<img src="<?php echo base_url(); ?>assets/file/<?php echo $aduan->file; ?>" width="90" height="110" alt="<?php echo $aduan->file ?>">
	    			</td>
	    			<td><?php echo $aduan->tanggal ?></td>
	    			<td><?php echo $aduan->keterangan ?></td>
	    			<td onclick="javascript: return confirm('Anda Yakin menghapus data ini?') "><?php echo anchor('pengaduan/hapus/'.$aduan->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
	    			<td><div class="btn btn-primary btn-sm disabled"><i class="fa fa-edit"></i></div></td>
	    		</tr>
	    		<?php endforeach; ?>
    		</tbody>
    	</table>
    </section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">Form Input Pengaduan</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	        <?php echo form_open_multipart('pengaduan/tambah_aksi'); ?>
	        	
	        	<div class="form-group">
	        		<label>Jenis Aduan</label>
	        		<select name="jenis_aduan" class="form-control" required="*">
	        			<option>Pelayanan</option>
	        			<option>Sarana Prasarana</option>
	        		</select>
	        		<!-- <input type="text" name="jenis_aduan" class="form-control"> -->
	        	</div>

	        	<div class="form-group">
	        		<label>Deskripsi</label>
	        		<input type="text" name="deskripsi" class="form-control" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Upload File</label>
	        		<input type="file" name="file" class="form-control" required="*">
	        	</div>


	        	<div class="form-group">
	        		<label>Tanggal</label>
	        		<input type="date" name="tanggal" class="form-control" required="*">
	        	</div>

	        	<div class="form-group">
	        		<label>Keterangan</label>
	        		<input type="text" name="keterangan" class="form-control">
	        	</div>

	        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
	       		<button type="submit" class="btn btn-primary">Simpan</button>

	        <?php echo form_close(); ?>
	      </div>
	    </div>
	  </div>
	</div>
</div>