<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

/**
 * Created by PhpStorm.
 * User: stanislavlipatkov
 * Date: 04.06.16
 * Time: 16:44
 */
    public function index()
    {
        $data['title'] = 'Codeignitor+Bootstarp';
        $this->load->view ('template/header', $data);
        $this->load->view ('home', $data);
        $this->load->view ('template/footer', $data);
    }
}
