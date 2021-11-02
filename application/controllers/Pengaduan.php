<?php 

class Pengaduan extends CI_Controller{
	public function index()
	{
		$data['pengaduan'] = $this->m_pengaduan->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pengaduan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$jenis_aduan 		= $this->input->post('jenis_aduan');
		$deskripsi			= $this->input->post('deskripsi');
		$file				= $_FILES['file'];
		if ($foto=''){} else{
			$config['upload_path']		= './assets/file';
			$config['allowed_types']	= 'jpg|pdf|png|';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('file')){
				echo 'Upload Gagal'; die();
			} else {
				$file = $this->upload->data('file_name');
			}
		}
		$tanggal			= $this->input->post('tanggal');
		$keterangan			= $this->input->post('keterangan');

		$data = array(
			'jenis_aduan'		=> $jenis_aduan,
			'deskripsi'			=> $deskripsi,
			'file'				=> $file,
			'tanggal'			=> $tanggal,
			'keterangan'		=> $keterangan,
		);

		$this->m_pengaduan->input_data($data, 'tb_pengaduan');
		redirect('pengaduan/index');
	}

	public function hapus ($id)
	{
		$where = array ('id' => $id);
		$this->m_pengaduan->hapus_data($where, 'tb_pengaduan');
		redirect('pengaduan/index');
	}

	public function print()
	{
		$data['pengaduan'] = $this->m_pengaduan->tampil_data('tb_pengaduan')->result();
		$this->load->view('print_pengaduan', $data);
	}

	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$data['pengaduan'] = $this->m_pengaduan->tampil_data('tb_pengaduan')->result();

		$this->load->view('laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream('laporan_pengaduan.pdf', array('Attachment' => 0));
	}
}
