<?php

namespace JochenTimmermans\LaravelLocation;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $table = 'locations';

	protected $fillable = [
		'city_id', 'street', 'housenumber', 'zipcode'
	];
}
