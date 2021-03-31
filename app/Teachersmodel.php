<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachersmodel extends Model
{
    use HasFactory;
    protected $table='teachers';
    protected $fillable=['FName','LName','Sex','Age','Email','Staffnumber'];  



}
