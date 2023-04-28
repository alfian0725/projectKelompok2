<?php

/*
defined('BASEPATH') or exit('No direct script access allowed');

class user_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_auth');
        $this->ci->load->library('session'); // memuat library session
    }

    public function login($username, $password)
    {
        $cek = $this->ci->m_auth->login_user($username, $password);
        if ($cek) {
            $nama_user = $cek->nama_user;
            $username = $cek->username;
            $level_user = $cek->level_user;

            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('nama_user', $nama_user);
            $this->ci->session->set_userdata('level_user', $level_user);
            redirect('admin');
        } else {
            $this->ci->session->set_flashdata('pesan', 'username atau password Anda salah');
            redirect('auth/login_user');
        }
    }

}
*/
/* End of file user_login.php */


?>