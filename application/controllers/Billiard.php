<?php

class meja extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman meja';
        $this->load->view('templates/header', $data);
        $this->load->view('meja/index',  $data);
        $this->load->view('templates/footer', $data);
    }
}
?>