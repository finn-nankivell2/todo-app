<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$admin = new User();
		$admin->name = "Dick Dastardly Richard";
		$admin->email = "admin@test.com";
		$admin->password = "secret";
		$admin->save();
	}
}
