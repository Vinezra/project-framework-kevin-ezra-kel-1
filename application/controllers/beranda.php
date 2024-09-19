<?php
class Beranda extends CI_Controller 
{
    public function index()
    {
        $data['judul'] = 'beranda';
        $this->load->view('templates/header', $data);
        $this->load->view('beranda/index', $data);
        $this->load->view('templates/footer', $data);
    }  
}
?>
