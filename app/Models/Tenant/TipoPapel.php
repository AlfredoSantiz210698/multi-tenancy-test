<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;

class TipoPapel extends Model
{
    protected $table = 'tipos_papeles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre'
    ];

    public $timestamps = false;

}
