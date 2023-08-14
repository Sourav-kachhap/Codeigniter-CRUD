<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model{
    public function create($formArray){
        
        $this->db->insert('users',$formArray);
        // $this->db->insert('users', $formArray);: Within the create method, this line is used to interact with the database. It uses the $this->db object to access the database functionalities provided by the CodeIgniter framework. The insert method is called on this database object to insert a new record into the users table. The first parameter 'users' specifies the table name, and the second parameter $formArray is the associative array that contains the user data to be inserted into the table.
    }

    function all(){
       return $users = $this->db->get('users')->result_array();
    //    $users is array with data running a query SELECT * FROM users
    // result array gives an array with multiple data  
    }

    function getUser($id){
        $this->db->where('id',$id);
        return $users = $this->db->get('users')->row_array();
        // row - array gives an array with a single data .
    }

    function updateUser($id,$formArray){
        $this->db->where('id',$id);
        $this->db->update('users',$formArray);
    }

    function deleteUser($id){
        $this->db->where('id',$id);
        $this->db->delete('users');
    }
}
?>