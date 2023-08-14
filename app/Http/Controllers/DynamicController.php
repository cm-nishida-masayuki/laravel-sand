<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicController extends Controller
{
    public function index() {
        echo "<h1>dynamic</h1>";
        echo session()->getId();
    }
}
