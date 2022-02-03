<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function siswa()
    {
        $data['title'] = 'welcome';
        $this->load->view('templates/login_h', $data);
        $this->load->view('auth/siswa', $data);
        $this->load->view('templates/login_f', $data);
    }
    public function admin()
    {
        $data['title'] = 'pilih login';
        $this->load->view('templates/landing_h', $data);
        $this->load->view('landing/pilih_login', $data);
        $this->load->view('templates/landing_f', $data);
    }
}
