<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class dashboardController extends Controller
{
    public function __construct(){
    	$this->middleware('web');
    }
    public function index(){
    	$countUser = DB::table('users')->count();
    	return view('layout.master', compact('countUser'));
    }
}
