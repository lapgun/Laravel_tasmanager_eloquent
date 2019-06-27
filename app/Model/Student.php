<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $table = 'student';
    protected $fillable = ['name','phone','address'];

}