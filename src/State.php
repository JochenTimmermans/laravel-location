<?php

namespace JochenTimmermans\LaravelLocation;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	protected $table = 'states';

	protected $fillable = [
		'country_id', 'identifier', 'name'
	];
}
