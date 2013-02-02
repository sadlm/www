<?php
class Task extends CI_Model {

    var $task   = '';
    var $due_date = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {

        $query = $this->db->get('tasks', 2);
        return $query->result();
    }

    function get_all() 
    {
        $query = $this->db->get('tasks');
        return $query->result();
    }

}