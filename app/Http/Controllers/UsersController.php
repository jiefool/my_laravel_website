<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){
    	if(Auth::user()->is_admin){
	    	$users = User::all();
	    	return view('users.index', array('users'=>$users));
	    }else{
	    	return redirect()->back();
	    }
    }
}
