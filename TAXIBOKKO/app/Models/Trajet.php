<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;
    protected $fillable = ['depart', 'arrive', 'duree', 'prix'];
    public static $rules = array(
        'depart' => 'required|min:3',
        'arrive' => 'required|min:3',
    );

}
