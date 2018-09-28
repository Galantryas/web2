<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contoh extends Controller
{
    function index(){
		return view('halamandua');
	}
	
	function halaman2(){
		return view('halamantiga');
	}
}
