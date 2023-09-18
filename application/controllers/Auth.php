<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
		$this->load->database();
    }

    public function index()
    {
        // Cek apakah pengguna sudah login
        if ($this->session->userdata('logged_in')) {
            // Jika sudah login, redirect ke halaman dashboard atau halaman lain yang sesuai
            if ($this->session->userdata('role') == 'admin') {
                redirect(base_url(). "admin");
            } else {
                redirect(base_url(). "auth");
            }
        } else {
            // Jika belum login, tampilkan halaman login
            $this->load->view('auth/login');
        }
    }
    
    public function aksi_login() 
    {
        // ... (kode login Anda tetap sama)
    }

    public function register() {
        $this->load->view('auth/register');
    }

	public function aksi_register() {
        $email    = $this->input->post('email', true);
        $username = $this->input->post('username', true);
        $password = md5($this->input->post('password', true));

        $data = [
            'email'    => $email,
            'username' => $username,
            'password' => $password,
            'role'     => 'admin',
        ];

        $table = 'admin';

        $this->db->insert($table, $data);

        if ($this->db->affected_rows() > 0) {
            // Registrasi berhasil
            $this->session->set_userdata([
                'logged_in' => TRUE,
                'email' => $email,
                'username' => $username,
                'role' => 'admin'
            ]);

            redirect(base_url() . "admin");
        } else {
            // Registrasi gagal
            redirect(base_url() . "auth/register");
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}
