<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
     function __construct()
    {
        parent:: __construct();
    }

    public function index() {
        $data["student"] = $this->Student_model->fetch_all_student();
        $this->load->view('add_student', $data);
        //$this->load->view('index.php');
    }
    
//    public function home(){
//        $this->load->view('home.php');
//    }
    
   public function add_student(){
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');

		$user_id = $this->Student_model->add_student($fname,$lname,$email);
		if ($user_id>0) {
			echo $user_id;
		}else{
			echo "user not saved.";
		}
	}
    
    public function services(){
        $this->load->view('service.php');
    }
    
    public function products(){
        $this->load->view('product.php');
    }
    
    public function carrier(){
        $this->load->view('carrier.php');
    }
    
    public function internship(){
        $this->load->view('internship.php');
    }
    
    public function blog(){
        $this->load->view('blog.php');
    }
    
    public function blog_single(){
        $this->load->view('blog_single.php');
    }
    
    public function contact(){
        $this->load->view('contact.php');
    }

}
