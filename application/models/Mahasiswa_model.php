<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
  
  public function getAll()
  {
    // return [
    //     [
    //       'id' => 1,
    //       'nim' => '1930511052',
    //       'nama' => 'Reski Mulud Muchamad'
    //     ],
    //     [
    //       'id' => 2,
    //       'nim' => '1930511053',
    //       'nama' => 'M Drajat Ramdani'
    //     ],
    //     [
    //       'id' => 3,
    //       'nim' => '1930511041',
    //       'nama' => 'Resita'
    //     ],
    //     [
    //       'id' => 4,
    //       'nim' => '1930511044',
    //       'nama' => 'Tika'
          
    //     ]
    //   ];

    return $this->db->get('mahasiswa')->result_array();
  }
  
  public function getMhsById($id)
  {
    return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
  }

  public function tambah($nim, $nama)
  {
    $data  = [
      'nim' => $nim,
      'nama' => $nama
    ];
    $query = $this->db->insert('mahasiswa', $data);
    return $query;
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->delete('mahasiswa');
    return $query;

  }

  
}