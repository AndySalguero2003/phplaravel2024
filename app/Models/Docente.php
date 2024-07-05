<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use function Laravel\Prompts\password;

class Docente extends Authenticable
{
    use HasFactory, Notifiable;
    public $timestamps= false;
    protected $table= 'docente';

    protected $fillable= [
        'nombre',
        'apellido',
        'email',
        'password',
    ];

    protected $hidden= [
        'password',
    ];


}
