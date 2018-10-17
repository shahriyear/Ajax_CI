<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class DataTable extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('DataTable_model');
	}

	public function index(){
		$this->load->view('data_view');
	}

	public function insert(){
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('title','Title','required');
		if($this->form_validation->run() == True){
			$post = $this->input->post();
			unset($post['subbtn']);
			$r = $this->DataTable_model->insert($post);
			if($r):
				echo json_encode("OK");
			else:
				echo json_encode("QF");
			endif;
		}else{
			foreach ($this->input->post() as $key => $value) {
				$r[$key] = form_error($key);
			}
			echo json_encode($r);
		}
	
	}

	public function all(){
		$data = $this->DataTable_model->all();
		echo json_encode($data);
	}

}

 ?>