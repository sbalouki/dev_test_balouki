<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $fillable = ['value'];

    /**
     * Disable the timestamps
     *
     * @var bool
     */
    public $timestamps = false;
}
