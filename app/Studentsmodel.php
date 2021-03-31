<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentsmodel extends Model
{
    use HasFactory;
    protected $table='_students';
    protected $fillable=['FName','LName','Email','Sex','Age','Class','Section'];  
}
