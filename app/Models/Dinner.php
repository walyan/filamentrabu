<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinner extends Model
{
    
    Use HasFactory;
    protected $fillable = [
        'menu',
        'bahan',
        'cara',
        'foto'
    ];
}
