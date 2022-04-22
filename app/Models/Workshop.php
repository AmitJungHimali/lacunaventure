<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
    protected $fillable=[
        'banner',
        'title',
        'descriptionTitle',
        'description',
        'objectivesTitle',
        'objectiveDescription',
        'rank',
        'status',
        'benefitTitle',
        'benefitDescription'
    ];
}
