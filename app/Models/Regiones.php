<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    protected $table = 'regiones';
    protected $regiones = [
        'id_Region',
        'nombreregion',
    ];
    use HasFactory;
}
