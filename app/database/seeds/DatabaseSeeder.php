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
		$this->call('BetTableSeeder');
	}

}




class UserTableSeeder extends Seeder {

  public function run()
  {

    DB::table('users')->truncate();

    User::create(array(
    	'username' 	=> 'Daemonde',
			'points' => '53',
			'firstname' => 'Dennis',
			'lastname'  => 'Mende',
    	'email' 	  => 'dennismende@me.com',
    	'password'  => Hash::make('secret')
    ));

    User::create(array(
    	'username' => 'Chrizzle',
			'points' => '27',
			'firstname' => 'Christoph',
			'lastname'  => 'Langhof',
    	'email' 		=> 'chrizzle@gmail.com',
    	'password'	=> Hash::make('secret')
    ));

		User::create(array(
    	'username' => 'The Destroyer',
			'points' => '11',
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


class BetTableSeeder extends Seeder {

  public function run()
  {

    DB::table('bets')->truncate();

    Bet::create(array(
    	'match_id' 	=> 2008817,
    	'user_id' 	=> 1,
			'bet_localteam_score' => 2,
			'bet_visitorteam_score' => 1,
			'points' => 53
    ));

		Bet::create(array(
    	'match_id' 	=> 2008817,
    	'user_id' 	=> 2,
			'bet_localteam_score' => 0,
			'bet_visitorteam_score' => 3,
			'points' => 30
    ));

		Bet::create(array(
    	'match_id' 	=> 2008817,
    	'user_id' 	=> 3,
			'bet_localteam_score' => 0,
			'bet_visitorteam_score' => 1
		));

		Bet::create(array(
    	'match_id' 	=> 2008817,
    	'user_id' 	=> 4,
			'bet_localteam_score' => 2,
			'bet_visitorteam_score' => 2,
			'points' => 0
    ));

  }

}
