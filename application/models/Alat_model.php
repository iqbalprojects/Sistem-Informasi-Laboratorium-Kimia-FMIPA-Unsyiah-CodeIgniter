<?php

class Alat_model extends CI_Model {

	
	public function getAllALat()

	{
		return $this->db->get('alat')->result_array();

	}

	public function tambahDataAlat()
	{
		$data = [
			"nama_alat" => $this->input->post('nama_alat'),
			"kuantitas" => $this->input->post('kuantitas'),
			"lokasi" => $this->input->post('lokasi'),
			"tgl_diperoleh" => $this->input->post('tgl_diperoleh'),
			"keterangan" => $this->input->post('keterangan')
		];
		
		$this->db->insert('alat', $data);
	}

	public function hapusDataAlat($id_alat)
	{
		$this->db->where('id_alat', $id_alat);
		$this->db->delete('alat');
	}

	public function getAlatById($id_alat)
	{
		return $this->db->get_where('alat', ['id_alat' => $id_alat])->row_array();
	}

	public function editDataAlat()
	{
		$data = [
			"nama_alat" => $this->input->post('nama_alat'),
			"kuantitas" => $this->input->post('kuantitas'),
			"lokasi" => $this->input->post('lokasi'),
			"tgl_diperoleh" => $this->input->post('tgl_diperoleh'),
			"keterangan" => $this->input->post('keterangan')
		];
		$this->db->where('id_alat', $this->input->post('id_alat'));
		$this->db->update('alat', $data);
	}
}