<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('view_calendar');
	}
}
