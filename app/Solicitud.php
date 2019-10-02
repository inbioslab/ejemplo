<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $fillable = [
        'nombres_sol', 'apellidos_sol', 'dni_sol',
    ];


    protected $table = 'solicitud';
}
