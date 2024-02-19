<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengguna_m extends CI_Model
{

    // public function index($post)
    // {
    //     $this->db->select('*');
    //     $this->db->from('user');
    //     $this->db->where('username', $post['username']);
    //     $query = $this->db->get();
    //     return $query;
    // }

    public function get($data = null)
    {
        $this->db->from('user');
        if ($data != null) {
            $this->db->where('user', $data);
        }
        $query = $this->db->get();
        return $query;
    }

    public function simpan($post)
    {
        $params['username'] = $post['username'];
        $params['password'] = md5($post['password']);
        $params['nama'] = $post['nama'];
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);
    }

    // public function edit($post)
    // {
    //     $params['name'] = $post['fullname'];
    //     $params['username'] = $post['username'];
    //     if (!empty($post['password'])) {
    //         $params['password'] = sha1($post['password']);
    //     }
    //     $params['address'] = $post['address'] != "" ? $post['address'] : null;
    //     $params['level'] = $post['level'];
    //     $this->db->where('user_id', $post['user_id']);
    //     $this->db->update('user', $params);
    // }

    // public function del($id)
    // {

    //     $this->db->where('user_id', $id);
    //     $this->db->delete('user');
    // }
}
