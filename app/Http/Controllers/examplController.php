<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\exampl;
use Illuminate\Http\Request;

class examplController extends Controller
{
    public function index() 
    {
       return view('example');
    }
    public function create() 
    {
       return view('example');
    }

}
