<?php

class Databarang extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Barang_model");
        $this->load->library("form_validation");
    }
    public function index()
    {
        $data['judul'] = 'daftar barang';
        $data['barang'] = $this->Barang_model->getAllBarang();
        $this->load->view("templates/header", $data);
        $this->load->view("Databarang/index",$data);
        $this->load->view("templates/footer");

    }

        public function tambah()
        {
            $data["judul"] = 'Form Tambah Data Barang ';

            $this->form_validation->set_rules('nama','Nama','required');
            if( $this->form_validation->run() == FALSE ) {
                $this->load->view("templates/header", $data);
                $this->load->view("Databarang/tambah");
                $this->load->view("templates/footer");
            } else {
                $this->Barang_model->tambahDataBarang() ;
                $this->session->set_flashdata("flash","selamat data berhasil di tambahkan");
                redirect("databarang");
            }
            
        }
    
        public function hapus($id)
        {
            $this->Barang_model->hapusDataPemesanan($id);
            redirect('databarang');
        }

        public function edit($id)
    {
        $data['judul'] = 'Form Edit Data Barang';
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('databarang/edit',$data);
        $this->load->view('templates/footer');

        if($this->input->post("edit")){
            $this->Barang_model->ubahDataBarang();     
            redirect('databarang');
        }
    }

}    