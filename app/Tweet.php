<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

//tinker
//simulate creating tweet
//factory('App\Tweet')->create(['user_id' => 5]);
