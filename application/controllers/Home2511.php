<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('categorias_model','modelcategorias');
		$this->categorias = $this->modelcategorias->listar_categorias();
	}
	public function index()
	{   
	    //$this->load->library('encryption');
		//$dados['mensagem']= 'Ola Mundo!';
		//$this->load->view('olamundo',$dados);
		  $dados['categorias'] = $this->categorias;
		  $this->load->view('/frontend/template/header');
		  $this->load->view('/frontend/template/html-header',$dados);
		  $this->load->view('/frontend/home');
		  $this->load->view('/frontend/template/aside');
		  $this->load->view('/frontend/template/footer');
		  $this->load->view('/frontend/template/html-footer');
	}
    /*public function teste()
	{   $dados['mensagem']= 'Testando!';
		$this->load->view('olamundo',$dados);
	}
	 public function testedb()
	{   $dados['mensagem']= $this->db->get('postagens')->result();
	    echo"<pre>";
		print_r($dados);
		
	}
	public function cripto()
	{   $this->load->library('encryption');
		$name= 'teste';
		echo $this->encryption->encrypt($name);
	}*/
}

