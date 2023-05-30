<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsrfController extends Controller
{
    //

    public function index(Request $request){

    //    return view('about');
       dd($request->all());

    }


    public function homeIndex(Request $request){

        dd($request-all());
    }
}