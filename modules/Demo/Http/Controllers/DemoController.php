<?php namespace Modules\Demo\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class DemoController extends Controller {
	
	public function index()
	{
		return view('demo::index');
	}
	
}