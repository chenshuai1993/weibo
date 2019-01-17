<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    //

    public function home()
    {
    	# code...
    	#echo 'home';

    	return view('static/home');
    }

    public function about()
    {
    	# code...
    	echo 'about';
    }

    public function help()
    {
    	# code...
    	echo 'help';
    }
}
