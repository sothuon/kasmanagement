<?php
class Main_model extends CI_Model
{
	public function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user_tbl');
		if($query->num_rows() > 0)
		{
			$user = $query->row_array();
			$this->session->set_userdata('user',$user);
			return true;
		}
		else
		{
			return false;
		}
	}
	public function insert_data($data)
	{
		$this->db->insert('user_tbl', $data);
	}
	public function fetch_data()
	{
		$query = $this->db->get('school_tbl');
		return $query;
	}
}