<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "customer";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
?>