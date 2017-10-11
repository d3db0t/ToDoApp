<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    # Guarded means the model can not insert to that particular column
    # So the user can not insert into the (role) column and change it to admin for example
    protected $guarded = ['role'];

    # User can have many tasks
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
