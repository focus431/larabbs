<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        //dd(\Auth::user()->hasVerifiedEmail());
        return view('pages.root');
    }
    
}
