<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    function index()
    {
        return view('footer'); //footer.blade.php
    }
}
