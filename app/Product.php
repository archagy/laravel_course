<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function description(){
    	return $this->hasMany(Description::class);
    }

}
