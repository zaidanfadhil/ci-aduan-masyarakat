<?php
class sistem extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('modelsistem');
        $this->load->helper('url', 'form'); 
    	$this->load->library('form_validation');
    } 
    // membuka halaman home
	public function index() {
		$judul['title']="SiapLapor!";
		$this->load->view('home',$judul);
	}

	// membuka halaman login
	public function login()
	{
		$judul['title']="SiapLapor!";
		$this->load->view('login',$judul);
	}

	// membuka halaman users
	public function users_form()
	{
		$judul['title']="SiapLapor!";
		$this->load->view('users',$judul);
	}

	// membuka halaman register
	public function index2() {
		$judul['title']="SiapLapor!";
		$this->load->view('register',$judul);
	}

	// membuka halaman sukses regis
	public function index3() {
		$judul['title']="SiapLapor!";
		$this->load->view('regis_berhasil',$judul);
	}
public function base(){
    $data ['title']= "base";
    $data ['user'] = $this->modelsistem->get_user();
    $data ['c_user'] = $this->modelsistem->count_user();
    $this->load->view('base',$data);   
}
public function simpan_data(){
    $this->modelsistem->simpan_db();
}
public function aksi_login(){
    $usernames = $this->input->post('username');
    $passwords = $this->input->post('pw');
    $where = array(
        'ussername' => $usernames,
        'password' => md5($passwords)
    );
    $cek = $this->modelsistem->cek_login("masyarakat",$where)->num_rows();

    if ($cek>0) {
        $nama = $this->modelsystem->cek_login("masyarakat",$where)->row(0)->nama;
        $nik = $this->modelsystem->cek_login("masyarakat",$where)->row(0)->nik;
        $data_session = array(
            'ussername' => $usernames,
            'status' => 'login',
            'nama' => $nama,
            'nik' => $nik
        );
        $this->session->set_userdata($data_session);
        if ($this->session->userdata('status')=='login') {
            header("Location:".site_url()."/sistem/users_form");
        } else {
            echo 'gagal login';
        }
    } else {
        header("Location:".base_url()."");
    }
}

// mengambil data yang login
public function tampil_nik()
{
    $data['niks'] = $this->Test->aksi_login();
    $data['c_nik'] = $this->modelsystem->get_user();
    $this->load->view('users', $data);
}

// untuk proses logout
public function logout() {
    $this->session->sess_destroy();
    redirect(base_url());
}
}