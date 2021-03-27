<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        // echo base_url();
        // echo site_url();
        // $this->load->view('home_view');
        //$data["student"]=$this->Master_Model->get_student_list();
        $data["student"] = $this->Student_model->get_student_list();
        $this->load->view('student_view', $data);
    }

    
    public function addstudent() {
        $this->load->view('add_view');
    }
    
    
    public function editstudent($student_id) {
		$data["student_data"] = $this->Student_model->get_student_By_Id($student_id);

		$this->load->view('edit_student', $data);
	}
        
         public function view_student($student_id) {
		$data["student_data"] = $this->Student_model->view_student_By_Id($student_id);

		$this->load->view('view_single_student', $data);
	}
        
    
	public function deletestudent($student_id){
		
		if ($this->Student_model->delet_Student($student_id)) {
			redirect('');
		}else{
			echo "Unable to delete data";
		}
	}    

    public function add() {
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');

        $user_id = $this->Student_model->add($fname, $lname, $email);
        if ($user_id > 0) {
            echo $user_id;
        } else {
            echo "user not saved.";
        }
    }
    
    public function edit(){
		$student_id = $this->input->post('student_id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email'); 

		if ($this->Student_model->update($student_id,$fname,$lname,$email)) {
			# code...
			echo "user saved successfully";
		}else{
			echo "user not saved.";
		}


	}

}
