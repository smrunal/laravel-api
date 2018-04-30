<?php

namespace Asahasrabuddhe\LaravelAPI\Tests\Models;

use Asahasrabuddhe\LaravelAPI\BaseUser;
use Asahasrabuddhe\LaravelAPI\Tests\Http\Resources\UserResource;

class User extends BaseUser
{
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

    protected $default = [
        'name'
    ];

    protected $resource = UserResource::class;

    public function address() {
        return $this->hasMany('App\Address');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }
}