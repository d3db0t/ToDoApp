<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    # Every Task belongsto one User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
