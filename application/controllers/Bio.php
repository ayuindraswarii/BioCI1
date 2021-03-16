<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bio extends CI_Controller
{
	public function index()
	{
		$this->load->view('bio_v');
	}
}
?>