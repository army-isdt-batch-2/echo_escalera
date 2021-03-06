<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = [
        'full_name',
        'username',
        'password',
        'created_at',
        'updated_at'
    ];
}
