<?php

class Model_kategori extends CI_Model{
    public function data_rumah_makan(){
        return $this->db->get_where("tb_tpm",array('kategori' => 'rumah makan'));
    }
}