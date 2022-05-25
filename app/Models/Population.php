<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;
    protected $fill = ['states' , 'total_population' , 'unvaccinated_population', 'vaccinated_population'];
}
