<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function likable(){
    	return $this->morphTo();
    }
}
