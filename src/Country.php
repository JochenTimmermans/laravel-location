<?php

namespace JochenTimmermans\LaravelLocation;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $table = 'countries';

	protected $fillable = [
		'identifier', 'name'
	];
}
