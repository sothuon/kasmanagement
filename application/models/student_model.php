<?php
class Student_model extends CI_Model
{
    public function student_insert($data)
    {
        return $this->db->insert('student_tbl', $data);
    }
}