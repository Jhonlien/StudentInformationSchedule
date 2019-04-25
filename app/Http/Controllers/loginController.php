<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class loginController extends Controller
{
    use AuthenticatesUsers;
    public function getLogin($guard='web'){
    	if (Auth::guard($guard)->check()){
    		return redirect()->route('dashboard');
    	}
    	return view('login');
    }

    public function checklogin(Request $req, $guard='web'){
    	$check = Auth::guard($guard)->attempt([
    		'username' => $req->username,
    		'password' => $req->password
    	]);
    	if($check){
    		return redirect()->route('dashboard');
    	}
    	else
    		return redirect()->route('login');
    }

    public function getLogout(){
        $guard='web';
        $auth = Auth::guard($guard)->logout();
        return redirect()->route('login');
    }
}
