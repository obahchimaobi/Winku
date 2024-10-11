<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function home()
    {
        // this will redirect to login page if
        // the user is not authenticated
        if (Auth::guard('user')->check()) {
            return view('home');
        } else {
            return redirect()->route('login');
        }
    }
}
