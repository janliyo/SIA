<?php

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array("url", "string","download"));
        $this->load->library(array("session", "form_validation", "email", "upload", "pagination"));
    }

    public function index()
    {
        $data["title"] = "LOGIN";
        $data["style"] = "assets/css/login.css";

        $this->load->view("includes/header", $data);
        $this->load->view("login_view", $data);
        $this->load->view("includes/footer");
    }

    public function login_user()
    {
        $this->load->model("LoginModel");

        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if($username == "admin" && $password == "admin"){
            redirect("DashboardController");
        }
        else{
            redirect("LoginController");
        }
    }

    public function dnd($data)
    {
        echo "<pre>";
        echo var_dump($data);
        echo "</pre>";
        die();
    }
}
