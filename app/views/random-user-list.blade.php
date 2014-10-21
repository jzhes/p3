@extends('_master')

@section('title')
	Random User Generator
@stop

@section('head')
	<link rel='stylesheet' href='random-user.css' type='text/css'>
@stop

@section('content')
	<h2>Random User Generator</h2>	

	{{ Form::open (array ('url' => '/random-user')) }}
		{{ Form::label('numusers', 'Number of Users:') }}
		{{ Form::text('numusers', '2', array('id' => 'numusers', 'maxlength' => '2', 'size' => '1')) }}
		<br>
		{{ Form::submit('Get Users', array('id' => 'generateusers')) }} 
	{{ Form::close()}}
	
	<?php $faker = Faker\Factory::create(); ?>

	{{-- CHANGE TO NUMUSERS BELOW --}}
	@for ($i=0; $i < 2; $i++) 
		 <h3>{{ $faker->name }}</h3>
			 {{ $faker->phoneNumber }} <br>
			 {{ $faker->address }} <br>
			 {{ $faker->text }}
	@endfor
@stop	