<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';

    protected $primaryKey = 'id';

    public $incrementing = false;

    public $autoincrement = false;

    public $timestamps = false;

   	protected $fillable = ['name'];
}