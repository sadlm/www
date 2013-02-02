<?php
class Telefoninfo extends CI_Model {

    var $name   = '';
    var $adres  = '';
    var $tel    = '';

    function inputinfo()
    {
    $values=$this->load->views('telefonviews',$_post);  
    return $values->result(); 
    }

}