<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function create($value='')
    {
    	# code...

    	return view('users.create');
    }

    public function show(User $user)
    {
    	# code...
    	#print_r($user);
    	return view('users.show', compact('user'));
    }
}
