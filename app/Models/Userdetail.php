<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'contact',
        'gender',
        'birthDate',
        'companyName',
        'userlogin_id',
        'role_id'
    ];
}
