<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller {

	
	public function index() {
		$this->load->view('welcome_message');
	}
	
	// /index.php/control/home
	public function home() {
		$this->load->view('home');
	}
	
	// /index.php/control/sobre
	public function sobre() {
		$this->load->view('sobre');
	}
	
	// /index.php/control/doPost
	public function doPost(){
		// controller enxergar o model
		// APPPATH onde esta o codeIgnitor
		require_once APPPATH."models/user.php";
		// 'model' eh o Model, aqui passa com letra minuscula
		$this->load->model('model');
		$m = $this->model;
		// "nome" eh o nome do campo do formulario que estou extraindo a informacao para gravar no banco
		$m->insert(new Usuario($_POST["tnome"], $_POST["temail"], $_POST["tnascimento"])); // new Usuario eh a classe Usuario de user.php
	}
	
	// /index.php/control/listar
	public function listar() {
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		//verificar se deu certo
		$usuarios = $m->searchAll();
		//$data é o dicionário do php
		$data['usuarios'] = $usuarios; //Obs: o nome ['usuarios'] deve ser o mesmo nome na view (lista.php) e no controllers (Control.php)
		//"lista" é o nome da view
		//$data é o vetor das variáveis usuários
		$this->load->view("lista", $data);
	}
	
	// /index.php/control/contato
	public function contato() {
		$this->load->view('contato');
	}
		
}
