<?php

	class Users extends CI_Controller{
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('password2','Confirm Password','matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else{
				//Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->session->set_flashdata('user_registered','You are now registered');

				$this->user_model->register($enc_password);
				redirect('posts');
			}


		}
		public function login(){
			$data['title'] = 'Login';

			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else{
				//Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->session->set_flashdata('user_loggedin','You are now loggedin');

				$this->user_model->register($enc_password);
				redirect('posts');
			}

		}
		function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'Username already used!');

			if($this->user_model->check_username_exists($username)){
				return true;
			}else{
				return false;
			}

		}



	}