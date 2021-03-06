<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepsek extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');

        if (empty($_SESSION['username'])) 
        {
            redirect('Welcome/index');
        } 
    }

    public function home()
    {
        $this->load->view('Kepsek/home');
    }

    public function daftar_aset()
    {
        $this->load->view('Kepsek/daftar_aset');
    }

    public function pengadaan_aset()
    {
        $this->load->view('Kepsek/pengadaan_aset');
    }

    public function penghapusan_aset()
    {
        $this->load->view('Kepsek/penghapusan_aset');
    }


    // LAPORAN
    public function lp_pengadaan()
    {
        $this->load->view('Kepsek/lp_pengadaan');
    }

    public function lp_peminjaman()
    {
        $this->load->view('Kepsek/lp_peminjaman');
    }

    public function lp_pemeliharaan()
    {
        $this->load->view('Kepsek/lp_pemeliharaan');
    }

    public function lp_penghapusan()
    {
        $this->load->view('Kepsek/lp_penghapusan');
    }
}
