y<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Pasien_model extends CI_Model
    {

        private $_table = 'pasien';

        public $id_pasien;
        public $nama;
        public $jk;
        public $alamat;
        public $agama;
        public $no_hp;
        public $email;

        public function rules()
        {
            return [
                [
                    'field' => 'nama',
                    'label' => 'Nama',
                    'rules' => 'required'
                ],
                [
                    'field' => 'jk',
                    'label' => 'JK',
                    'rules' => 'required'
                ],
                [
                    'field' => 'alamat',
                    'label' => 'Alamat',
                    'rules' => 'required'
                ],
                [
                    'field' => 'agama',
                    'label' => 'Agama',
                    'rules' => 'required'
                ],
                [
                    'field' => 'no_hp',
                    'label' => 'No_hp',
                    'rules' => 'required'
                ],
                [
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required'
                ],
            ];
        }

        public function getAll()
        {
            return $this->db->get($this->_table)->result();
        }

        public function getById($id)
        {
            return $this->db->get_where($this->_table, ["id_pasien" => $id])->row();
        }

        public function save()
        {
            $post = $this->input->post();
            // $this->id_pasien = uniqid();
            $this->nama = $post["nama"];
            $this->jk = $post["jk"];
            $this->alamat = $post["alamat"];
            $this->agama = $post["agama"];
            $this->no_hp = $post["no_hp"];
            $this->email = $post["email"];
            return $this->db->insert($this->_table, $this);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->id_pasien = $post["id"];
            $this->nama = $post["nama"];
            $this->jk = $post["jk"];
            $this->alamat = $post["alamat"];
            $this->agama = $post["agama"];
            $this->no_hp = $post["no_hp"];
            $this->email = $post["email"];
            return $this->db->update($this->_table, $this, array('id_pasien' => $post['id']));
        }

        public function delete($id)
        {
            return $this->db->delete($this->_table, array("id_pasien" => $id));
        }
    }
