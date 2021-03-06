<?php

namespace App;

//the below line bring in all the lib and functions a model needs for working properly
//everything is imported in one single file
use Illuminate\Database\Eloquent\Model;

//this model will look for a table named Questions, since model is singular, 
//so table name will be plural
class Question extends Model
{
    //by default it will look for id automatically, so no need to specify here
    //by default will look for the table name in plural form, here is QUestions
    //by default it will also look for timestamp fields - created_at and updated_at

    //protected $table = 'user_questions'; in case you want to specify a different table name here

    //here we want to define relationship between question and answers
    //here we want to reference to answers
    public function answers()
    {
        //define relationship between answers and questions
        //one question has multiple answers
        //so we have to specify the name of answer model
        return $this->hasMany('App\Answer'); //this is one->many relationship
    }

}
