<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class User extends CI_Controller
 {
 	public function index(){
 		$this->load->view('header');
 		$this->load->view('index');
 		$this->load->view('footer');
 	}

 	public function about(){
		$this->load->view('header');
 		$this->load->view('about');
 		$this->load->view('footer');
 	}
 	public function five_basics(){
 		$this->load->view('header');
 		$this->load->view('five_basics');
 		$this->load->view('footer');
 	}
 	public function mosque(){
 		$this->load->view('header');
 		$this->load->view('mosque');
 		$this->load->view('footer');
 	}
 	public function prayer_times(){
 		$this->load->view('header');
 		$this->load->view('prayer_times');
 		$this->load->view('footer');
 	}
 	public function scholars_video(){
 		$this->load->view('header');
 		$this->load->view('scholars_video');
 		$this->load->view('footer');
 	}
 	public function hadith(){
 		$this->load->view('header');
 		$this->load->view('hadith');
 		$this->load->view('footer');
 	}
 	public function muslim_names(){
 		$this->load->view('header');
 		$this->load->view('muslim_names');
 		$this->load->view('footer');
 	}
 	public function duas(){
 		$this->load->view('header');
 		$this->load->view('duas');
 		$this->load->view('footer');
 	}
	public function zakaat(){
		$this->load->view('header');
 		$this->load->view('zakaat');
 		$this->load->view('footer');
 	}
 	public function fitra(){
 		$this->load->view('header');
 		$this->load->view('fitra');
 		$this->load->view('footer');
 	}
 	public function faq(){
 		$this->load->view('header');
 		$this->load->view('faq');
 		$this->load->view('footer');
 	}
 	public function contact(){
 		$this->load->view('header');
 		$this->load->view('contact');
 		$this->load->view('footer');
 	}
 	public function login(){
 		$this->load->view('login');
 	}
 }

?>
