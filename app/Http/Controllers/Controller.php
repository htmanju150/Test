<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
   // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(){

        $client = new Client();
        $r = $client->request('GET', 'https://api.coursera.org/api/courses.v1'
            , ['connect_timeout' => 25]
        );

        $stream = $r->getBody();
        $contents = $stream->getContents();

        $res=$contents;

        return view('CourseList',compact('res'));

    }


    public function saveCourse(){
        $input = Input::all();
        $courses=json_decode($input['course_details'],true);
        $save_course=new Course();
        $save_course->course_id=$courses['id'];
        $save_course->course_type=$courses['courseType'];
        $save_course->course_slug=$courses['slug'];
        $save_course->course_name=$courses['name'];
        $save_course->save();
        return redirect()->back()->with('message', 'Course details Saved Successfully.');



    }


    public function getSavedCourses(){


        $saved_courses=new Course();
        $res= json_encode($saved_courses->get_saved_course_details());

        return view('SavedList',compact('res'));



    }





}
