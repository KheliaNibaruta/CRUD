<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$title = "Login";
		$this->load->view('admin/login',['title'=>$title]);
	}

	public function login()
	{
		$this->form_validation->set_rules('inputEmail','inputEmail','required');
		$this->form_validation->set_rules('inputPassword','inputPassword','required');

		if ($this->form_validation->run() === FALSE) {
			echo validation_errors();
		} else {
			$email = $this->input->post('inputEmail');
      $password = $this->input->post('inputPassword');

			$this->load->model('admin_model');

			if ($this->admin_model->login($email,$password)) {
				$s = [
					'id_adm' => $this->admin_model->login($email,$password)->id_adm,
					'email' => $this->admin_model->login($email,$password)->email,
					'role' => $this->admin_model->login($email,$password)->role
					// 'id_adm' => $this->admin_model->login($email,$password)->id_adm,
				];

				$this->session->set_userdata($s);
				// echo "iriyo";
				return redirect('welcome/dashboard');

			} else {
				$this->session->set_flashdata('message', 'Email or Password is incorrect');
				redirect("welcome/index");
			}

		}

	}

	public function dashboard()
	{
		$title  = "DashBoard";

		$this->load->model('admin_model');

		$obj = $this->admin_model->getObj();

		$this->load->view('admin/dashboard',['title'=>$title,'obj'=>$obj]);
	}

	public function remove($id_obj)
	{
		$this->load->model('admin_model');

		if ($this->admin_model->remove($id_obj)) {
			return redirect('welcome/dashboard');
		} else {
			echo "nono";
		}

	}

	public function add()
	{
		$title  = "Add";

		$this->load->view('admin/add',['title'=>$title]);
	}



	public function edit($id_obj)
	{
		$title  = "Edit";

		$this->load->model('admin_model');

		$getObject = $this->admin_model->getObject($id_obj);

		$this->load->view('admin/edit',['title'=>$title,'getObject'=>$getObject]);
	}

	public function create()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('shipTo','shipTo','required');
		$this->form_validation->set_rules('phone','phone','required');

		if ($this->form_validation->run() === FALSE) {
			echo validation_errors();
		} else {
			$this->load->model('admin_model');

			if ($this->admin_model->add()) {
				return redirect('welcome/dashboard');
			} else {
				echo "vyanse...";
			}
		}
	}

	public function update($id_obj)
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('shipTo','shipTo','required');
		$this->form_validation->set_rules('phone','phone','required');

		if ($this->form_validation->run() === FALSE) {
			echo validation_errors();
		} else {
			$this->load->model('admin_model');

			if ($this->admin_model->update($id_obj)) {
				return redirect('welcome/dashboard');
			} else {
				echo "vyanse...";
			}

		}

	}
}
