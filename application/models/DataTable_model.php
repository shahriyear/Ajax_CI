<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataTable_model extends CI_Model{

	private $table 	= 'tbl_data';
	public 	$name 	= 'name';
	public 	$title	= 'title';
	public 	$des	= 'des';

	public function insert($post){
		$q = $this->db->insert($this->table,$post);
		if($q)
			return true;
		return false;
	}

	public function all(){
		$q = $this->db->order_by('id','DESC')->get($this->table);
		if($q)
			return $q->result();
		return false;
	}

}



?>