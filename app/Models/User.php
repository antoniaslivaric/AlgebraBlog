<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
     /**
     * Get the user's posts.
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
