<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\JoinCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JoinCourseController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
        $data['course_id'] = $course;
        $data['user_id'] = Auth::user()->id;
        // dd($data);
        JoinCourse::create($data);
        return redirect()->route('home');
    }
}
