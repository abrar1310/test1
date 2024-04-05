<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function hi(){
        return 'welcome here';
    }
}
