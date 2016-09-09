<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $id = $this->input->post("id");
        $this->load->Model("database");
        $query = $this->database->comments($id);
        echo json_encode($query);
    }
    public function register()
    {
        $name = $this->input->post("name");
        $username = $this->input->post("username");
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $rpassword = $this->input->post("rpassword");

        $this->load->Model("database");
        $query = $this->database->register($name, $username, $email, $password);
      // if($query === 1){
        $array = array("username"=>$username, "email"=>$email);
        $this->session->set_userdata($array);
            echo $query;

       // }
      //  else{
        //    echo $query;
        //}
    }



    public function logout()
    {
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("email");
    }

    public function login()
    {
      $username = $this->input->post("susername");
        $password = $this->input->post("spassword");
        $this->load->Model("database");
        $query = $this->database->login($username, $password);


        if($query==0){
        echo "</p>Username/Email or Password incorrect.</p><a class='forgot'>Forgot Password?</a> ";
        }
        elseif($query==1){

            echo 1;
       
        }

    }

}