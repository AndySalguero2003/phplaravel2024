<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Estudiante extends Authenticable
{
    use HasFactory, Notifiable;
    public $timestamps= false;
    protected $table= 'estudiante';

    protected $fillable= [
        'nombre',
        'apellido',
        'email',
        'pin',
    ];

}
