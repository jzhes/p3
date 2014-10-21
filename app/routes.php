<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/lorem-ipsum', function()
{
	$numParas = 3;
	return View::make('lorem-ipsum')
			-> with('numParas', $numParas);
});

Route::post('/lorem-ipsum', function()
{
	$numParas = Input::get('numParas'); 
	
	$generator = new Badcow\LoremIpsum\Generator(); 
	$paragraphs = $generator->getParagraphs($numParas);

	return View::make('lorem-ipsum')
			-> with('paragraphs', $paragraphs)
			-> with('numParas', $numParas);
});

Route::post('/random-user', function()
{
	$numUsers = Input::get('numUsers'); 
	$phoneNumber = Input::get('phoneNumber'); 
	$profile = Input::get('profile'); 

	$faker = Faker\Factory::create(); 
	$users = array();
	
	for ($i=0; $i < $numUsers; $i++) {
		$users[$i] = '<h3>' . $faker->name . '</h3>';
		if ($phoneNumber) {
			 $users[$i] .= '<div id=\'phoneNumber\'>' . $faker->phoneNumber . '</div>';
		}	
		if ($profile) {
			$users[$i] .= '<div id=\'profile\'>' . $faker->text . '</div>';
		}	
	}

	return View::make('random-user')
			-> with ('numUsers', $numUsers)
			-> with ('users', $users);
});

Route::get('/random-user', function()
{
	$numUsers = 1; 
	return View::make('random-user')
			-> with ('numUsers', $numUsers);
});
