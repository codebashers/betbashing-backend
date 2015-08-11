<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}




class UserTableSeeder extends Seeder {

  public function run()
  {

    DB::table('users')->truncate();

    User::create(array(
    	'username' 	=> 'Daemon',
			'firstname' => 'Dennis',
			'lastname'  => 'Mende',
    	'email' 	  => 'dennismende@me.com',
    	'password'  => Hash::make('secret')
    ));

    User::create(array(
    	'username' => 'Chrizzle',
			'firstname' => 'Christoph',
			'lastname'  => 'Langhof',
    	'email' 		=> 'chrizzle@gmail.com',
    	'password'	=> Hash::make('secret')
    ));

		User::create(array(
    	'username' => 'The Destroyer',
			'firstname' => 'Max',
			'lastname'  => 'Mustermann',
    	'email' 		=> 'stefan.mustermann@abc.com',
    	'password'	=> Hash::make('secret')
    ));

		User::create(array(
			'username' => 'Joker',
			'firstname' => 'Johann',
			'email' 		=> 'pizzle@gmail.com',
			'password'	=> Hash::make('secret')
		));

  }

}
