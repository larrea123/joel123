<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {


	public function index()
	{
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('inicio');
		$this->load->view('inc/pie');
	}
	public function prod()
	{
		$lista=$this->estudiante_model->listaestudiantes();
		$data['estudiantes']=$lista;
		
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('productos',$data);
		$this->load->view('inc/pie');
	}
	public function cont()
	{
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('contactos');
		$this->load->view('inc/pie');
	}



}
