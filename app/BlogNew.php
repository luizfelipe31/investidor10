<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogNew extends Model
{
    protected $fillable = [
        'title',
        'text'
    ];
}
