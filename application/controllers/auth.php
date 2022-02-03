<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function siswa()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $data['title'] = 'welcome';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/login_h', $data);
            $this->load->view('auth/siswa', $data);
            $this->load->view('templates/login_f', $data);
        } else {
            $this->_siswa();
        }
    }
    public function _siswa()
    { }

    public function admin()
    {
        $data['title'] = 'pilih login';
        $this->load->view('templates/landing_h', $data);
        $this->load->view('landing/pilih_login', $data);
        $this->load->view('templates/landing_f', $data);
    }
}
