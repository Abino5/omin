<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

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
        $id=$this->input->post("id");
        $this->load->Model("database");
       $query = $this->database->comments($id);
echo json_encode($query);
    }
    public function add()
    {

$username = $this->session->userdata("username");
        if(!$username){
            echo 'Error';
        }
        else{
            $comment=$this->input->post("comment");
            $id=$this->input->post("id");
            $this->load->Model("database");
            $this->database->comments_add($id, $comment);
            echo $username;
        }

    }


}
