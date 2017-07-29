<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//hasMany
	function books(){
    	return $this->hasMany(Book::class);
    }
}
