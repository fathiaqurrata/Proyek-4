<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'first_name',
        'last_name',
        'address',
        'city',
        'nationality',
        'gender',
        'religion',
    ];
}
