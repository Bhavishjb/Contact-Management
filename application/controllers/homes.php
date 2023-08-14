<?php
    class homes extends CI_Controller{
        public function index($page = 'home')
        {
            $this->load->view('templates/header');
            $this->load->view($page);
            $this->load->view('templates/header');
        }
	
    }