<?php
	
	
	class Users_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function select_all(){
			$this->db->where('status',1);
			$this->db->order_by('id','desc');
			$query = $this->db->get('users');
			//$p = $this->db->last_query();
			//var_dump($p); exit;
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return null;
			}

		}

		public function insert($value){
			 $insert = $this->db->insert('users',$value);
			 return $insert;
		}

		public function edit($id){
			$this->db->where('id',$id);
			$query = $this->db->get('users');
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return null;
			}

		}

		public function update($id,$data){
			$this->db->where('id',$id);
			$value= $this->db->update('users',$data);
			//echo $this->db->last_query(); exit;
			return $value;
		}

		public function delete($id){
			
			$this->db->where('id',$id);
			$delete_query = $this->db->delete('users');
		  //echo	$this->db->last_query(); exit;

			return $delete_query;
		}
	}

?>