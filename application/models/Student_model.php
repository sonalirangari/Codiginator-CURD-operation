<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

    function __construct() {
        parent:: __construct();
    }

    /*View all records in database*/
    public function get_student_list() {
        try {
            $this->db->select('*');
            $this->db->from('tbl_data');
            $query = $this->db->get();

            $student = array();
            if ($query->num_rows() > 0) {

                $newarray = array();
                foreach ($query->result()as $row) {
                    $newarray = array(
                        'student_id' => $row->student_id,
                        'fname' => $row->fname,
                        'lname' => $row->lname,
                        'email' => $row->email
                    );
                    array_push($student, $newarray);
                }
            }
            return $student;
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return False;
        }
    }

    /*Insert Record*/
    public function add($fname, $lname, $email) {
        try {
            $array = array(
                "fname" => $fname,
                "lname" => $lname,
                "email" => $email
            );

            if ($this->db->insert('tbl_data', $array)) {
                return $this->db->insert_id();
            } else {
                return 0;
            }
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
        }
    }
    
            /*update record(single record)*/
    public function update($student_id,$fname,$lname,$email){
	try {
	  $array = array(
	  	'fname' =>$fname ,
	  	'lname'=> $lname,
	  	'email' => $email  );
	  $this->db->where('student_id',$student_id);
	  if ($this->db->update('tbl_data',$array)) {
	  	return 1;
	  }else{
	  	return 0;
	  }
		
	} catch (Exception $e) {
		error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
	}
}

            /*get student by id (single record)*/
        public function get_student_by_id($student_id) {
		try {
			$this->db->select('*');
			$this->db->from('tbl_data');
			$this->db->where('student_id', $student_id);

			$query = $this->db->get();

			$newarray = array();
			if($this->db->affected_rows() > 0) {
				$newarray = array(
					'student_id' => $query->row()->student_id,
					'fname' => $query->row()->fname,
					'lname' => $query->row()->lname,
					'email' => $query->row()->email,
					

				);
			}
			return $newarray;

		} catch(Exception $ex){
			error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
		}
	}
        
         /*Delete student by id (single record)*/
        public function delet_Student($student_id){
		try {
			$this->db->where('student_id',$student_id);
		if ($this->db->delete('tbl_data')) {
			# code..
			return 1;
		}else{
			return 0;
		}
			
		} catch (Exception $e) {
			error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
		
			
		}
		
	}
        
        /*View Single student by id (single record)*/
         public function view_student_by_id($student_id) {
		try {
			$this->db->select('*');
			$this->db->from('tbl_data');
			$this->db->where('student_id', $student_id);

			$query = $this->db->get();

			$newarray = array();
			if($this->db->affected_rows() > 0) {
				$newarray = array(
					'student_id' => $query->row()->student_id,
					'fname' => $query->row()->fname,
					'lname' => $query->row()->lname,
					'email' => $query->row()->email,
					

				);
			}
			return $newarray;

		} catch(Exception $ex){
			error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
		}
	}

}
