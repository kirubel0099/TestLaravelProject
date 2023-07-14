<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exampl extends Model
{
    protected $fillable = [
        'tokenable',
        'name',
       
    ];

   use HasFactory;
}
