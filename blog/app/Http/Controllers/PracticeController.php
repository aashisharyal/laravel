<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;

class PracticeController extends Controller
{
    public function index()
    {
        return view('layout/view');
    }
    public function second()
    {
        return view('layout/back');
    }
    public function third()
    {
        return view('layout/view');
    }
}
