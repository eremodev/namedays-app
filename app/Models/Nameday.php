<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nameday extends Model
{
    use HasFactory;

    protected $fillable = ['month', 'date', 'name'];
}
