<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaAG extends Model
{
    use HasFactory;
    protected $table = 'cinema';
    protected $fillable = ['name', 'idade', 'filme', 'namefilme', 'faixaetaria', 'capacidadesala'];
}
