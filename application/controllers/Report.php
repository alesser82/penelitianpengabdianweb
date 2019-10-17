<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    

    public function index()
    {
        $this->load->view('report/index');
    }

}

/* End of file Report.php */
