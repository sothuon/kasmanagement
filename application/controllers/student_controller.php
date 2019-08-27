<?php
class Student_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function student_insert()
    {

        $this->form_validation->set_rules('txteng_name', 'EngName', 'required');
        $this->form_validation->set_rules('txtkh_name', 'KhName', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('txtphoto', 'Photo', '');
        $this->form_validation->set_rules('dateofbirth', 'DOB', 'required');
        $this->form_validation->set_rules('addr', 'Address', 'required');
        $this->form_validation->set_rules('txtcontact', 'Contact', 'required');
        if($this->form_validation->run())
        {
            $this->load->model('student_model');
            $data = array(
                'stud_name'	=>$this->input->post('txteng_name')
                // 'txtkh_name'	=>$this->input->post('txtkh_name'),
                // 'gender'	    =>$this->input->post('gender'),
                // 'txtphoto'  	=>$this->input->post('txtphoto'),
                // 'dateofbirth'	=>$this->input->post('dateofbirth'),
                // 'addr'      	=>$this->input->post('addr'),
                // 'txtcontact'	=>$this->input->post('txtcontact')
            );
            $this->student_model->student_insert($data);
            redirect(base_url(). 'login_controller/student_profile');
        }
        else
        {

        }
    }
}