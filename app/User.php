<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $table = 'usuario';

    protected $primaryKey = 'usu_codigo';

    public $incrementing = false;
    
    public $autoincrement = false;

    public $timestamps = false;

    protected $fillable = [
        'password', 'usu_nombre', 'fk_rol'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
