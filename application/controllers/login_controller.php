<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Controller extends CI_Controller {
	public function index()
	{
		$this->load->view('auth/sign_in');
	}
	// public function signup()
	// {
	// 	$this->load->view('auth/sign_up');
	// }
	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('main_model');
			if($this->main_model->can_login($username, $password))
			{
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'login_controller/admin');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				redirect(base_url() . 'login_controller/index');
			}
		}
		else
		{
			$this->index();
		}
	}
	public function admin()
	{
		if($this->session->userdata('user')['username'] != '')
		{
			$this->load->view('main_page');
		}
		else
		{
			redirect(base_url() . 'login_controller/index');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect(base_url() . 'login_controller/index');	
	}
	public function student_profile()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('student_profile');
		$this->load->view('layout/footer');
	}
	public function school_profile()
	{
		$this->load->view('school_profile');
	}
	public function testing()
	{
		$this->load->view('testing');
	}
}
