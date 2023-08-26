<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Web extends CI_Controller{
	function __construct(){
			parent::__construct();
			$this->load->helper('url');
	}
	public function catatan(){
		$data['judul'] = "CATATAN";
		$this->load->view('v_header',$data);
		$this->load->view('v_catatan',$data);
		$this->load->view('v_footer',$data);
	}
	public function galeri(){
		$data['judul'] = "GALERI";
		$this->load->view('v_header',$data);
		$this->load->view('v_galeri',$data);
		$this->load->view('v_footer',$data);
	}
	public function jadwalkuliah(){
		$data['judul'] = "JADWAL KULIAH";
		$this->load->view('v_header',$data);
		$this->load->view('v_jadwalkuliah',$data);
		$this->load->view('v_footer',$data);
	}
	public function index(){
		$data['judul'] = "Halaman Depan";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}
	public function about(){
		$data['judul'] = "About me";
		$this->load->view('v_header',$data);
		$this->load->view('v_about',$data);
		$this->load->view('v_footer',$data);
	}
	
}