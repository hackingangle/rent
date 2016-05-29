<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home() 
    {
        return view('welcome');
    }

    public function about() 
    {
        $auths = [
            'hackingangle',
            'jekyll',
        ];
        // $auths = [];
        // return view('pages.about', compact('auths'));
        // return view('pages.about')->withAuths($auths);
        return view('pages.about')->with('auths', $auths);
    }
}
