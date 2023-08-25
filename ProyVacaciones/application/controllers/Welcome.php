<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function hola()
	{
		$this->load->view('holamundo');
	}
	public function contactos()
	{
		$this->load->view('contactos');
	}
}
