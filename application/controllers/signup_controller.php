<?php
class Signup_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	function signup()
	{
		$this->load->view('auth/sign_up');
	}
	function signup_validation()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'Cpassword', 'required');
		if($this->form_validation->run())
		{
			$this->load->model('main_model');
			$data = array(
				'username'	=>$this->input->post('username'),
				'email'		=>$this->input->post('email'),
				'password'	=>$this->input->post('password'),
				'cpassword'	=>$this->input->post('cpassword')
			);
			$this->main_model->insert_data($data);
			redirect(base_url(). 'login_controller/index');
		}
		else
		{
			$this->signup();
		}
	}
}