<?php

class Report_Model extends CI_Model
{
    function get_NumberOfUsers() //Number of registered users
    {
        $this->db->select('count(*) as no');
        $query = $this->db->get('users');
        return $query->result();
    }
}
?>