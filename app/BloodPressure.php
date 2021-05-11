<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodPressure extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'rate',
        'systolic',
        'diatolic',
    ];


    /**
     * The attributes should be cast to native type.
     *
     * @var array
     */

    protected $casts = [
        'id' => 'integer',
    ];
}