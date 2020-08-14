<?php

class modelsistem extends CI_Model{
    public function simpan_db(){
        // $config['upload_path'] = './assets/';
        // $config['allowed_types'] = 'jpg|png|gif';
        // $config ['file_name'] = '2048000';
        // $filename = $this->upload->filename;
        // $this->upload->initialize($config);
        // $this->upload->do_upload('gambar');
        // $data = $this->upload->data();

        $data = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('name'),
            'ussername' => $this->input->post('username'),
            'telp' => $this->input->post('nohp'),
            'password' => $this->input->post('pw'),
        );
        $this->db->insert('masyarakat',$data);
        echo "databerhasil di simpan";
        // header("Location:". base_url().'test/index3');
    }

    public function get_user(){
    $data = $this->db->get('masyarakat');
    return $data->result();
    }

    public function count_user(){
        $data = $this->db->get('masyarakat');
        return $data->num_rows();
    }
    public function cek_login($table,$userdata){
        return $this->db->get_where($table,$userdata);
        
    }
    
}
