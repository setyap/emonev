<?php

class Kategori extends CI_Controller{
    public function rumah_makan()
    {
        $data['rumah_makan'] = $this->model_kategori->data_rumah_makan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('rumah_makan',$data);
        $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }
}