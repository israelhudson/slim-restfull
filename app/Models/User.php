<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
//vendor/bin/phinx create UsersTable
//vendor/bin/phinx migrate

{
    protected $fillable = ['name', 'email', 'password'];

}