<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	private $dir = 'app.';

    public function index()
    {
    	return view($this->dir.'index');
    }
}
