<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');

		echo current_url();
	}
}
