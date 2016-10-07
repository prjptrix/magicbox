<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

    function __construct()
    {
         parent:: __construct();
         $this->load->model('fas_model'); //loading your model
    }
	public function index()
	{
	   $data['list']=$this->fas_model->get('fas_category');
	   $this->load->view('includes/header');
	   $this->load->view('category/index',$data);
       $this->load->view('includes/footer');
	}
    public function Add()
	{
	   $this->load->view('includes/header');
	   $this->load->view('category/add');
       $this->load->view('includes/footer');
	}
    public function PostAdd()
	{
	   $data=array(
       "CategoryTitle"=>$this->input->post("CategoryTitle"),
       "CategoryDescription"=>$this->input->post("CategoryDescription")
       );
       
       $this->fas_model->add('fas_category',$data);
	   $this->load->view('includes/header');
	   $this->load->view('category/add');
       $this->load->view('includes/footer');
	}
}