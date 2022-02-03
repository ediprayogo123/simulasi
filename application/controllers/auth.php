<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function siswa()
    {
        $this->form_validation->set_rules('nisn', 'nisn', 'required|trim');
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
    {
        $nisn = $this->input->post('nisn');
        $password = $this->input->post('password');
        $user = $this->db->get_where('siswa', ['nisn' => $nisn])->row_array();

        if ($user) {
            if ($user['password'] == $password) {
                $data = [
                    'nisn' => $user['nisn'],
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger " role="alert">wrong password!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger " role="alert">email is not registerd!</div>');
            redirect('Auth');
        }
    }

    public function admin()
    {
        $data['title'] = 'pilih login';
        $this->load->view('templates/landing_h', $data);
        $this->load->view('landing/pilih_login', $data);
        $this->load->view('templates/landing_f', $data);
    }
}
