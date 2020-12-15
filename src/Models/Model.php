<?php

namespace Zareismail\Keil\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model as LaravelModel, SoftDeletes}; 


class Model extends LaravelModel
{
    use HasFactory, SoftDeletes;
     
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
