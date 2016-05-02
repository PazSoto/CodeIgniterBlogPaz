<?php 
if(!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
* 
*/
class PrimerControlador extends CI_Controller
{
	public function index()
	{
		echo 'Pagina inicial del controlador';
	}
	public function accion2()
	{
		echo 'Pagina 2';
	}
	public function accion3()
	{
		echo 'Pagina 3';
	}
}