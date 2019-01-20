<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Status;

class StaticController extends Controller
{
    //

    public function home()
    {
    	$feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }

        return view('static/home', compact('feed_items'));
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
