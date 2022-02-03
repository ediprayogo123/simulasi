<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'welcome';
		$this->load->view('templates/landing_h', $data);
		$this->load->view('landing/index', $data);
		$this->load->view('templates/landing_f', $data);
	}
	public function login()
	{
		$data['title'] = 'pilih login';
		$this->load->view('templates/landing_h', $data);
		$this->load->view('landing/pilih_login', $data);
		$this->load->view('templates/landing_f', $data);
	}
}
