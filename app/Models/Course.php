<?php


namespace App\Models;
//use Illuminate\Database\Eloquent;
use Eloquent;
use DB;
class Course extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'course_details';

    /**
     * The attributes excluded from the model's JSON form.
     * @var array
     */
    protected $hidden = array('');

    /**
     * ret
     * @var array
     */



    public function get_saved_course_details()
    {
      return  $response =  Course ::select("*")->get()->toArray();


    }



}