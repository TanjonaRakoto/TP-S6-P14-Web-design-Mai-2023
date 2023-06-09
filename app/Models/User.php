<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'name_user',
        'pass_user'
    ];
}
