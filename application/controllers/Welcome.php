<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function index()
	{
		$this->load->library('session');
		$this->session->set_userdata('key','value');
		$this->load->view('session_view');
	}
	public function testing(){
		//loading session library
		$this->load->library('session');
		
	 //removing session data 
	 $this->session->unset_userdata('key'); 
	 $this->load->view('session_view'); 
	}
}
?>
