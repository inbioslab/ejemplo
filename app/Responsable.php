<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{

    protected $fillable = [
        'nombre_res', 'apellidos_res', 'dni_res',
    ];

    protected $table = 'responsable';
}
