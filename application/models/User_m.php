<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends CI_Model {

  public function login($username,$passwords){

    $result = 'no';
    $query = $this->db->query('SELECT * FROM USER where username ="'.$username.'"  AND password = "'.$passwords.'" ');

    if($query->num_rows() > 0){
    	redirect('Login/dashboard');
    }
    else{
    	echo "anda tidak login";
    }
  }

}