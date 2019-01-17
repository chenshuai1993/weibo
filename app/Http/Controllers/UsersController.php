<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create($value='')
    {
    	# code...

    	return view('users.create');
    }
}
