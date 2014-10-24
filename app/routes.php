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
			-> with('msg', "")
			-> with('numParas', $numParas);
});

Route::post('/lorem-ipsum', function()
{
	$numParas = Input::get('numParas'); 

	if (!is_numeric($numParas) || ($numParas < 1)) { // Check input for valid number and if not display an error message 
			$msg = "Please enter a number between 1 and 99 and try again."; 
	} else {
			$msg =""; // Ensure the message is cleared
	}		
			
	$generator = new Badcow\LoremIpsum\Generator(); 
	$paragraphs = $generator->getParagraphs($numParas);

	return View::make('lorem-ipsum')
			-> with('msg', $msg)
			-> with('paragraphs', $paragraphs)
			-> with('numParas', $numParas);
});

Route::get('/random-user', function()
{
	$numUsers = 1; 
	return View::make('random-user')
			-> with ('msg', "")
			-> with ('numUsers', $numUsers);
});

Route::post('/random-user', function()
{
	$numUsers = Input::get('numUsers'); 
	$phoneNumber = Input::get('phoneNumber'); 
	$profile = Input::get('profile'); 

	if (!is_numeric($numUsers) || ($numUsers < 1)) { // Check input for valid number and if not display an error message 
			$msg = "Please enter a number between 1 and 99 and try again.";
	} else {
			$msg ="";
	}		

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
			-> with ('msg', $msg)
			-> with ('users', $users);
});

