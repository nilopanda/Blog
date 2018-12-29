<?php
    class Blogs extends CI_Controller{
        public function index(){

            $data['title'] = "Latest Post";
            $data['posts'] = $this->blog_model->get_posts();
            
            //print_r($data['posts']);
            
            $this->load->view('template/header');
            $this->load->view('blogs/index', $data);
            $this->load->view('template/footer');
            
        }
    }