<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Read extends CI_Controller
{
        public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        }

        public function user() {

        if($this->uri->segment(3)===NULL) {
         
                $data['userdata'] = $this->UserModel->select_all();
                $this->load->view('readView',$data);
        
        } else {

                $id = $this->uri->segment(3);

           if ($data['user'] = $this->UserModel->select_by_id($id)) {
                
                $data['userdata'] = $this->UserModel->select_all();
                $this->load->view('readView',$data);
                
             } else {

                ECHO "No record Found";
            }

        }
      
    }

        public function insert_user(){

        //$students = new UserModel;
        $data['check1'] = 1;
        $this->load->view('readView',$data);
        if(($this->input->post('insert')==='insert')) {
           
        $this->UserModel->insert_student();
        redirect(base_url('user'));
         }
        

        }

        public function update_user() {

            if($this->uri->segment(3)!==NULL){

                $id = $this->uri->segment(3);

            }

            if(($this->input->post('submit')==='Update')) {

                $this->UserModel->update_by_id($id);

            }

            $data['check'] = TRUE;

            $data['user'] = $this->UserModel->select_by_id($id); 
           
            $this->load->view('readView',$data);
             
        }

        public function delete_user() { 

            if($this->uri->segment(3)!==NULL){
            
                $id = $this->uri->segment(3);
            
            }
            
            $this->UserModel->delete_by_id($id);
            
            echo "User Deleted";
        }



        /*
        $result = $this->user_model->get_user_by_id();
        if ($result === false) {
            $data['user'] = "Sorry not data available";
        } else {
            $data['user'] = $result;
        }

    }
*/

}
