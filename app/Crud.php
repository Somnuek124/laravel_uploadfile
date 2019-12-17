<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
     'p_name', 'p_price', 'image', 'qty', 'detail'
    ];
}
