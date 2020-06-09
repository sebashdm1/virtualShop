<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(Request $request){

        return view( 'dashboard',[
            'title' => $request->query('title', 'valor default')
        ]);

    }
}
