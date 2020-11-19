<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('Mahasiswa_model', 'mahasiswa');
    
    $this->load->helper(['url', 'form']);
    $this->load->library('form_validation');
  }
  
  public function index()
  {
    $data['title'] = 'Data Mahasiswa';
    $data['mahasiswa'] = $this->mahasiswa->getAll();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar', $data);
    $this->load->view('mahasiswa', $data);
    $this->load->view('templates/footer', $data);
  }
  
  public function detail($id)
  {
    $data['mahasiswa'] = $this->mahasiswa->getMhsById($id);
    $data['title']     = 'Detail Mahasiswa';
    
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar', $data);
    $this->load->view('detail', $data);
    $this->load->view('templates/footer', $data);
  }

  public function formAdd()
  {
    $data['title'] = 'Tambah Data';

    $this->form_validation->set_rules('nim', 'NIM', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar', $data);
      $this->load->view('formAdd', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $nim = $this->input->POST('nim');
      $nama = $this->input->POST('nama');


      $query =  $this->mahasiswa->tambah($nim, $nama);

      if ($query) {
        $this->session->set_flashdata('notification', 'Data berhasil ditambahkan');
        redirect('mahasiswa');
      } else {
        $this->session->set_flashdata('err_notification', 'Data gagal ditambahkan');
        redirect('mahasiswa/formAdd');
      }
      
    }
  }
  
}