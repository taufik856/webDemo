<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->Model('User_m');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function terima()
	{
	 $username1 =	$this->input->post('email');
	 $password1 =	$this->input->post('pass');

	 $this->User_m->Login($username1,$password1);

	}

	public function dashboard(){
		echo 'halo ini dashboard';
	}
}
	
?>