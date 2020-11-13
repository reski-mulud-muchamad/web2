<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Mahasiswa_model', 'mahasiswa');
        $this->load->helper(['url', 'form']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title']   = 'Dashboard';
        $data['content'] = 'Selamat datang di SIAK UMMI';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer', $data);
    }

}