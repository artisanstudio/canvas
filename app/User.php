<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasFactories,
        Activatable, ImpersonatesUsers;

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }
}
