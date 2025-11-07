<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // ✅ Add the fields that can be mass assigned
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'course',
        'phone',
        'address',
    ];
}
