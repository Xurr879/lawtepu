<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class rerollController extends Controller
{
    public function index()
    {
        return view ("index");
    }

}