<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian extends CI_Controller {
	public function index()
	{
		$data['tpp'] = $this->model_tpm->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar_ovhid');
		$this->load->view('templates/filter');
		$this->load->view('pencarian',$data);
		$this->load->view('templates/js');
	}
}
