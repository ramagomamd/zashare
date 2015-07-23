<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function artist() {
		return $this->belongsToMany('App\Artist');
	}
	
	public function tracks() {
		return $this->hasMany('App\Track');
	}
	
	public function genre() {
		return $this->belongsTo('App\Genre');
	}
}
