<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {


	public function index()
	{
		$data['estudiantes']=$this->estudiante_model->listaestudiantes();

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_lista',$data);
		$this->load->view('inc/pie');
	}
	public function deshabilitados()
	{
		$data['estudiantes']=$this->estudiante_model->listaestudiantesdes();

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_listades',$data);
		$this->load->view('inc/pie');
	}
	
	public function agregar()
	{
		//mostar un formulario para agregar nuevo estudiante
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_formulario');
		$this->load->view('inc/pie');
	}
	public function agregarbd()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre de usuario','required|min_length[5]|max_length[12]',
				array('required'=>'Se requiere el nombre','min_length'=>'Por lo menos 5 caracteres','max_length'=>'Maximo 12 caracteres'));

		$this->form_validation->set_rules('apellido1','Primer apellido','required|min_length[5]|max_length[12]',array('required'=>'Se requiere el 
				apellido','min_length'=>'Por lo menos 5 caracteres','max_length'=>'Maximo 12 caracteres'));

		$this->form_validation->set_rules('apellido2','Segundo apellido','required|min_length[5]|max_length[12]');

		$this->form_validation->set_rules('nota','Nota','required|greater_than[-1]|less_than[101]',array('required'=>'Se requiere la nota',
				'greater_than'=>'mayor o igual a 0','less_than'=>'Menor o igual a 100'));

		if($this->form_validation->run()==FALSE)
				{
				$this->load->view('inclte/cabecera');
				$this->load->view('inclte/menusuperior');
				$this->load->view('inclte/menulateral');
				$this->load->view('est_formulario');
				$this->load->view('inclte/pie');
				}
		else
				{
				$data['nombre']=$_POST['nombre'];
				$data['primerApellido']=$_POST['apellido1'];
				$data['segundoApellido']=$_POST['apellido2'];
				$data['nota']=$_POST['nota'];
				}

		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['nota']=$_POST['nota'];


		$this->estudiante_model->agregarestudiante($data);
		redirect('estudiante/index','refresh');
	}
	public function eliminarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$this->estudiante_model->elimarestudiante($idestudiante);
		redirect('estudiante/index','refresh');
	}
	public function modificar()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['infoestudiante']=$this->estudiante_model->recuperarestudiante($idestudiante);

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_modificar',$data);
		$this->load->view('inc/pie');
	}
	public function modificarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['nota']=$_POST['nota'];

		$this->estudiante_model->modificarestudiante($idestudiante,$data);
		redirect('estudiante/index','refresh');
	}
	public function deshabilitarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['habilitado']='0';

		$this->estudiante_model->modificarestudiante($idestudiante,$data);
		redirect('estudiante/index','refresh');

	}
	public function habilitarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['habilitado']='1';

		$this->estudiante_model->modificarestudiante($idestudiante,$data);
		redirect('estudiante/deshabilitados','refresh');

	}



}