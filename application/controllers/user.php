<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_controller{
   function index(){
    $this->load->model('User_model');
    $users = $this->User_model->all();                
    $data = array();
    $data['users'] = $users;
    $this->load->view('list',$data);

   }  
  
  
  function create(){
      $this->load->model('User_model');
      $this->form_validation->set_rules('username','Name','required');
      $this->form_validation->set_rules('email','Email','required|valid_email');

      if($this->form_validation->run() == false){
        $this->load->view('create');
      }else{  
        $formArray = array();
        $formArray['fullname'] = $this->input->post('username');
        $formArray['email'] = $this->input->post('email');
        $this->User_model->create($formArray);
        $this->session->set_flashdata('success','Record added successfully');
        redirect(base_url().'index.php/user/index');
      }

       
    }

    function edit($id){
      $this->load->model('User_model');
      $userdata = $this->User_model->getUser($id);
      $data = array();
      $data['userdata'] = $userdata;
      $this->form_validation->set_rules('username','Name','required');
      $this->form_validation->set_rules('email','Email','required|valid_email');

      if($this->form_validation->run() == false){
        $this->load->view('edit',$data);
      }else{
        $formArray = array();
        $formArray['fullname'] = $this->input->post('username');
        $formArray['email'] = $this->input->post('email');
        $this->User_model->updateUser($id,$formArray);
        $this->session->set_flashdata('success','Record updated successfully');
        redirect(base_url().'index.php/user/index');

      }

    }

    function delete($id){
      $this->load->model('User_model');
      $user = $this->User_model->getUser($id);
      if(empty($user)){
        $this->session->set_flashdata('failure','Record not found in database');
        redirect(base_url().'index.php/user/index');
      } else{
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('success','Record Deleted successfully');
        redirect(base_url().'index.php/user/index');

      }

    }
    
}
?>