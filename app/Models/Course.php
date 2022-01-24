<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getExcerptAttribute()
    {
        return substr($this->description, 0 , 80) . "...";
    }
}
