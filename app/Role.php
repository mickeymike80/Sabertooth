<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Create a relationship between the Role and User models.
     *
     * @return one-to-many relationship
     */
    public function user(){
        return $this->hasMany('App\User');
    }
}
