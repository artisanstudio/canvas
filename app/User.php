<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Activatable, HasApiTokens, HasFactories;

    protected $guarded = [];
    protected $hidden  = ['password', 'remember_token'];
}
