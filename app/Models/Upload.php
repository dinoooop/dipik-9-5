<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'url_two'
    ];

   
}
