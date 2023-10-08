<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'titulo',
        'contenido',
        'estado',
        'autor'
    ];
    protected $dates = ['deleted_at'];
}
