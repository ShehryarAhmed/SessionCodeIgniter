<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public Welcome(){
		$this->load->library('session');
		$this->seesion->set_userdata('key','value');
	}

	public function index()
	{
		$this->load->view('welcome_message');
			}

	public function testing(){
		echo "Testing";
		$value = $this->session->userdata('key');
		echo $value;
	}
}
?>
