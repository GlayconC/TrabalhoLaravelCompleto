<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCarros extends Model
{
    protected $table = 'carros';
    protected $fillable=['id','nome','preco'];
}