<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userlogin extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'recoveryEmail',
        'password',
        'token'
    ];
    public function details(){
        return $this->hasOne('App\Models\Userdetail');
    }
}
