<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') !== 'Admin') {
            redirect('home');
        }
    }
    public function index()
    {
        $this->db->select('*')->from('produk');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'PureGlow | Produk',
            'user'          => $user
        );
        $this->template->load('template', 'produk_index', $data);
    }
    public function simpan()
    {
        // Proses upload gambar
        $config['upload_path']          = './uploads/produk/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 2048; // 2MB
        $config['encrypt_name']         = TRUE; // Enkripsi nama file
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $gambar = 'uploads/produk/' . $upload_data['file_name']; // Path file gambar yang akan disimpan ke database

            // Data produk
            $data = array(
                'kode_produk' => $this->input->post('kode_produk'),
                'stok' => $this->input->post('stok'),
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'gambar' => $gambar // Simpan path gambar ke database
            );
            $this->db->insert('produk', $data);
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-primary alert-dismissible" role="alert">
            Produk berhasil ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-danger alert-dismissible" role="alert">
            ' . $error['error'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }

        redirect('produk');
    }

    public function hapus($id_produk)
    {
        $where = array('id_produk' => $id_produk);
        $this->db->delete('produk', $where);
        $this->session->set_flashdata('notifikasi', '
                <div class="alert alert-primary alert-dismissible" role="alert"> Produk berhasil dihapus
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> ');
        redirect('produk');
    }
    public function edit($id_produk)
    {
        $this->db->from('produk')->where('id_produk', $id_produk);
        $user = $this->db->get()->row();
        $data = array(
            'judul_halaman' => 'PureGlow | Edit Data Produk',
            'user'          => $user,
            'page'          => $edit
        );
        $this->template->load('template', 'produk_edit', $data);
    }
    public function update()
    {
        // Proses upload gambar jika ada
        if (!empty($_FILES['gambar']['name'])) {
            $config['upload_path']          = './uploads/produk/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['max_size']             = 2048; // 2MB
            $config['encrypt_name']         = TRUE; // Enkripsi nama file
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $this->input->post('old_image');
                if (!empty($old_image)) {
                    unlink($old_image); // Hapus gambar lama jika ada
                }
                $upload_data = $this->upload->data();
                $gambar = 'uploads/produk/' . $upload_data['file_name'];
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('notifikasi', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                    ' . $error . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
                redirect('produk/edit/' . $this->input->post('id_produk'));
            }
        } else {
            // Gunakan gambar yang sudah ada jika tidak ada gambar baru yang diunggah
            $gambar = $this->input->post('old_image');
        }

        $data = array(
            'kode_produk'     => $this->input->post('kode_produk'),
            'stok'            => $this->input->post('stok'),
            'nama'            => $this->input->post('nama'),
            'harga'           => $this->input->post('harga'),
            'gambar'          => $gambar,
        );
        $where = array('id_produk' => $this->input->post('id_produk'));
        $this->db->update('produk', $data, $where);
        $this->session->set_flashdata('notifikasi', '
        <div class="alert alert-primary alert-dismissible" role="alert"> Produk berhasil diperbaharui
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ');
        redirect('produk');
    }

}
