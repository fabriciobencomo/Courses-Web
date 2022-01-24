<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function course(Course $course)
    {
        $i = 1;
        return view('course', compact('course', 'i'));
    }
}
