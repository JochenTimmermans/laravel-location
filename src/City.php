<?php

namespace JochenTimmermans\LaravelLocation;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table = 'cities';

	protected $fillable = [
		'country_id','state_id', 'identifier', 'name'
	];
}
