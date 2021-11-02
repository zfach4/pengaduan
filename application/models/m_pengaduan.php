<?php 

class M_pengaduan extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tb_pengaduan');
	}

	public function input_data($data){
		$this->db->insert('tb_pengaduan', $data);
	}

	public function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('tb_pengaduan');
	}
}

 ?>