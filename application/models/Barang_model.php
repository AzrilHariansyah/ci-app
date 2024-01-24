<?php
    class Barang_model extends CI_Model {

        public function getAllBArang()
        {
            $this->db->select('pemesanan.nama, databaarang.data_barang, wilayah.wilayah,pemesanan.id');
            $this->db->from('pemesanan');
            $this->db->join('databaarang', 'pemesanan.databarang = databaarang.id_data_barang');
            $this->db->join('wilayah', 'pemesanan.wilayah = wilayah.id_data_wilayah');
            $query = $this->db->get();
    
            return $query->result_array();
        }
        public function tambahDataBarang()
        {
            $data = [
                "nama" => $this->input->post('nama', TRUE),
                "databarang" => $this->input->post("namabarang", TRUE),
                "wilayah" => $this->input->post("wilayah", TRUE),
            ];

            $this->db->insert("pemesanan", $data);
        }

        public function hapusDataPemesanan($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('pemesanan');
        }

        public function getBarangById($id)
        {
        return $this->db->get_where('pemesanan', ['id' => $id])->row_array();
        }

        public function ubahDataBarang()
        {
            $data = [
                "nama" => $this->input->post('nama', TRUE),
                "databarang" => $this->input->post("namabarang", TRUE),
                "wilayah" => $this->input->post("wilayah", TRUE),
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('pemesanan',$data);
        }
}