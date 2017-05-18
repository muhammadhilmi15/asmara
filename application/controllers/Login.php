<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->m_login->cek_login("t_admin",$where);
		if($cek->num_rows() == 1){
			foreach ($cek->result() as $sess) {
				$data_session = array(
					'username' => $sess->username,
					'level' => $sess->level,
					'nama' => $sess->nama,
					'status' => 'login'
				);
			}
			$this->session->set_userdata($data_session);
			redirect('dashboard');
		}else{
			echo "Username dan password salah!";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
