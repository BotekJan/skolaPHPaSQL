

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TableController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CustomersModel');
    }

    public function customers() {
        $data["data"] = $this->CustomersModel->getCustomers();
        $data["title"] = "Seznam zákazníků";
        $data["main"] = "customersList";
        $this->layout->generate($data);
    }
    
    
    public function zobrazObjednavkyZakaznika($ID){
        $data["objednavky"] = $this->CustomersModel->getObjednavky($ID);
        $data["title"] = "Seznam objednávek";
        $data["customerName"] = $this->CustomersModel->getCustomer($ID);
        $data["main"] = "ordersList";
        $this->layout->generate($data);
    }
}
