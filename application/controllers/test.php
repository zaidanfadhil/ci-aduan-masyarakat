<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class test extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('modelsistem');
    }
    public function index2(){
        $judul['title']="SiapLapor!";
        $this->load->view('register',$judul);
    }
    public function index3(){
        $judul['title']="SiapLapor!";
        $this->load->view('regis_berhasil',$judul);
    }
    public function login(){
        $judul['title']="SiapLapor!";
        $this->load->view('login',$judul);
    }
}
