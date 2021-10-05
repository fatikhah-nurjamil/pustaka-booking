<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinema extends CI_Controller {

	public $harga_tiket, $total;

	public function index()
	{
		"Pemesanan Tiket Cinema 99";
		$this->load->view('view-input-cinema');
		
	}

	public function cetak()
	{

		$data= [
			'nama_pemesan'=>$this->input->post('nama_pemesan'),
			'judul_film'=>$this->input->post('judul_film'),
			'pukul'=>$this->input->post('pukul'),
			'tipe_studio'=>$this->input->post('tipe_studio'),
			'jumlah_pesanan'=>$this->input->post('jumlah_pesanan'),
		];
	
		$this->load->view('view-output-cinema',$data);
		
	}
}
 