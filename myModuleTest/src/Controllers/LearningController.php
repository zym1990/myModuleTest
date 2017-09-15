<?php

namespace Zym1990\Learning\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index()
    {
        $name = config('learning.test_name');
        $module = config('learning.module');

        return view('learning::learning', compact('name', 'module'));
    }
}
