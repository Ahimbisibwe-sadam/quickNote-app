<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // to allow mass assignment for title and content
    protected $fillable = ['title', 'content'];
}
