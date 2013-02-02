<?php
class Telefon extends CI_Model {

    var $name   = '';
    var $adres  = '';
    var $tel    = '';
    $infoN = '';    
    $infoA = '';
    $infoT = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {

        $query = $this->db->get('telefon', 1);
        return $query->result();
    }

    function get_all() 
    {
        $query = $this->db->get('telefon');
        return $query->result();
    }

    function inputinfo()
    {
        
    $_POST['Name']=$this->load->views('telefonviews',$_post['Name']);
    $_POST['adres']=$this->load->views('telefonviews',$_post['adres']);
    $_POST['tel']=$this->load->views('telefonviews',$_post['tel']); 
       $sql = "INSERT INTO telefon (Name, adres, tel) 
        VALUES (".$this->db->escape($_POST['Name']).", ".$this->db->escape($_POST['adres']).",".$this->db->escape($_POST['tel']).")";

       $this->db->query($sql);
    } 
  }