<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('template/backend/theme');
	}

	public function tes({

$blade = new Blade('views', 'cache');

echo $blade->make('homepage', ['name' => 'John Doe'])->render();
	})
}