<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Breakfast extends Model
{
    Use HasFactory;
    protected $fillable = [
        'menu',
        'bahan',
        'cara',
        'foto'
    ];
}
