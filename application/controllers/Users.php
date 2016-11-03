<?php

	
	class Users extends CI_controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Users_model');
		}

		public function index(){
			//$this->load->view('insert');
			$select = $this->Users_model->select_all();
			$i = 0;
			foreach ($select as $value) {
				$user_data[$i][0] = $value->username;
				$user_data[$i][1] = $value->email;
				$user_data[$i][2] = $value->id;
				$i++;
			}
			//var_dump($select); exit;
			$data = array(
				'show_all' => $user_data 
				);
			$this->load->view('index',$data);
			//var_dump($user_data); exit;

		}

		public function insert(){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$about = $this->input->post('about');
			$gender = $this->input->post('gender');

			$value =  array(
				'username' => $name,
				'email' => $email,
				'about' => $about,
				'gender' => $gender,
				'status' => 1
				 );

			if($this->Users_model->insert($value)){
				echo 'data hasbeen saved';
			}
			else
			{
				echo 'data not saved';
			}
		}

		public function edit($id){
			$id = $this->uri->segment(2);
			//var_dump($id); exit;
			$query = $this->Users_model->edit($id);
			//var_dump($query->rows()); exit;
			if($query){

			$edit_value[0] = $query[0]->username;
			$edit_value[1] = $query[0]->email;
			$edit_value[2] = $query[0]->id;
			$array =  array(
				'data' => $edit_value
				 );
			$this->load->view('edit',$array);

			}
			else{
				echo 'no data found';
				//$this->load->view('edit');
				redirect('Users');

			}
			//var_dump($array); exit;
			
		}

		public function update(){
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$data = array(
				'username' => $name,
				'email' => $email
				 );
			$value = $this->Users_model->update($id,$data);
			if($value){
				redirect('Users');
				echo 'updated succesfully';
			}
			else{
				echo 'not updated data';
			}

		}

		public function delete($id){
			$id =  $this->uri->segment(3); 

			if($this->Users_model->delete($id)){
				redirect('Users');
			}
			else{
				echo 'not deleted';
			}

		}
	}

?>