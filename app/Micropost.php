<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favoriteds()
    {
        return $this->belongsToMany(User::class, 'micropost_favorite', 'favorite_id', 'user_id')->withTimestamps();
    }
}
