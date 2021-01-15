<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('hello');

	}
	public function mencoba()
	{
		$this->load->view('tes');

	}
	public function tidak()
	{
		$this->load->view('sugan');

	}
}
?>