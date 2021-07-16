<?php

class Alat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Alat_model', 'alat');
	}
	
	public function index()
	{
		$data['alat'] = $this->alat->getAllAlat();
		$this->load->view('templates/header');
		$this->load->view('templates/navigation');
		$this->load->view('tables', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$data['lokasi'] = ['Kimia Dasar', 'Kimia Organik', 'Kimia Analitik'];

		$this->form_validation->set_rules('nama_alat', 'Nama Alat', 'required');
		$this->form_validation->set_rules('kuantitas', 'Kuantitas', 'required|numeric');
		$this->form_validation->set_rules('tgl_diperoleh', 'Tanggal Diperoleh', 'required');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header');
			$this->load->view('templates/navigation');
			$this->load->view('form', $data);
			$this->load->view('templates/footer');
		} else {
			$this->alat->tambahDataAlat();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('alat');
		}
	}

	public function hapus($id_alat)
	{
			$this->alat->hapusDataAlat($id_alat);
			$this->session->set_flashdata('flash', 'dihapus');
			redirect('alat');
	}

	public function edit($id_alat)
	{
		$data['alat'] = $this->alat->getAlatById($id_alat);
		$data['lokasi'] = ['Kimia Dasar', 'Kimia Organik', 'Kimia Analitik'];

		$this->form_validation->set_rules('nama_alat', 'Nama Alat', 'required');
		$this->form_validation->set_rules('kuantitas', 'Kuantitas', 'required|numeric');
		$this->form_validation->set_rules('tgl_diperoleh', 'Tanggal Diperoleh', 'required');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header');
			$this->load->view('templates/navigation');
			$this->load->view('edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->alat->editDataAlat();
			$this->session->set_flashdata('flash', 'diubah');
			redirect('alat');
		}
	}
}
