<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types_of_vaccine extends Model
{
    use HasFactory;
    protected $fillable = ['vaccine_name' , 'available_quantity' , 'vaccine_type', 'vaccine_creator'];
    //public $timestamps = false;
}
