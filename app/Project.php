<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'days',
        'description',
        'user_id',
        'company_id',
    ];
}
