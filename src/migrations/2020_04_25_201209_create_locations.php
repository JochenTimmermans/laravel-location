<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocations extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('countries', function (Blueprint $table) {
			$table->id();
			$table->string('identifier');
			$table->string('name');
			$table->timestamps();
		});


		Schema::create('states', function (Blueprint $table) {
			$table->id();
			$table->foreignId('country_id');
			$table->string('identifier');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('cities', function (Blueprint $table) {
			$table->id();
			$table->foreignId('country_id');
			$table->foreignId('state_id');
			$table->string('identifier');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('locations', function (Blueprint $table) {
			$table->id();
			$table->foreignId('city_id');
			$table->string('street');
			$table->string('zipcode');
			$table->string('housenumber');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('locations');
		Schema::dropIfExists('cities');
		Schema::dropIfExists('states');
		Schema::dropIfExists('countries');
	}

}
