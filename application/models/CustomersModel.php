<?php

class CustomersModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getCustomers(){
        $this->db->select('id, firma, mesto');
        $this->db->from('aa_zakaznik');

        return $this->db->get()->result();
    }

    public function getObjednavky($ID){
        $this->db->select('id_objednavka, datum_objednavky');
        $this->db->from('aa_objednavka');
        $this->db->where('id_zakaznik', $ID);
        $this->db->order_by('datum_objednavky', 'DESC');

        return $this->db->get()->result();
    }

    public function getCustomer($ID){
        $this->db->select('firma');
        $this->db->from('aa_zakaznik');
        $this->db->where('id', $ID);

        $result = $this->db->get()->result();

        return $result[0]->firma;
    }
}

?>