<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

use HasFactory;
public $timestamps = false;
protected $fillable = 
['documento_identidad','nombre','apellido','email','telefono'];
}
