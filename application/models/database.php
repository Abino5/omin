<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Model {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

    }
    public function movies(){
        $this->load->database();
        $query = $this->db->get('movies');
        return $query->result_array();
    }
    public function comments($id){
        $this->load->database();
        $query = $this->db->get_where('comments', array('movie_id'=>$id));
        return $query->result_array();
    }

    public function comments_add($id, $comment){
        $this->load->database();
        $query = $this->db->insert('comments', array('movie_id'=>$id, 'data'=> $comment, 'commenter'=>$this->session->userdata('username')));
        // return $query->result_array();
    }
    public function register($full_name, $username, $email, $password){
        $this->load->database();


        $check_username = $this->db->get_where("users", array("username"=>$username));


        if($check_username->num_rows() > 0){
            return "<p>Username has been taken, Choose another.</p>";
        }
        $check_email = $this->db->get_where("users", array("email"=>$email));

        if($check_email->num_rows() > 0){
            return "<p>Email is already registered. <a id='forgot'>Forgot Password?</a></p>";
        }
        else{
            $query = $this->db->insert('users', array('name'=>$full_name, 'password'=> $password, 'username'=>$username, 'email'=>$email));
            if($query){

                return 1;

            }
            else{
                return 0;
            }
        }



    }
    public function login($username, $password){
        $this->load->database();


        $check_username = $this->db->get_where("users", array("username"=>$username, "password"=>$password),1);
        $check_email = $this->db->get_where("users", array("email"=>$username, "password"=>$password),1);

        if($check_username->num_rows() > 0){

            $checked_username = $check_email->row_array();
            $array = array("username"=>$username, "email"=>$checked_username["email"]);
            $this->session->set_userdata($array);
            return 1;
        }
        elseif($check_email->num_rows() > 0){
            $checked_username = $check_email->row_array();
            $array = array("username"=>$checked_username["username"], "email"=>$username);
            $this->session->set_userdata($array);

            return 1;
            }

        else{
            return 0;
        }

    }

}
