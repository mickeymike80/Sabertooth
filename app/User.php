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
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Create a relationship between the User and Role models.
     * This makes the Role model accessible from User model.
     *
     * @return one-to-many relationship
     */
    public function role(){
        return $this->belongsTo('App\Role');
    }

    /**
     * Checks whether the user has a role of Administrator
     *
     * @return true if user is an Administrator
     */
    public function isAdmin(){
        if($this->role->name = 'Administrator'){
            return true;
        }
        return false;
    }
}
