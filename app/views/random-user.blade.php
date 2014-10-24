@extends('_master')

@section('title')
	Random User Generator
@stop

@section('content')
	<a href="../">Go Home</a>

 	<h2>Random User Generator</h2>	
	
	<p class="error">
		@if ($msg != "")
			{{ $msg }}
		@endif
	</p>

	{{ Form::open (array ('url' => '/random-user')) }}
		{{ Form::label('numUsers', 'Number of Users:') }}
		{{ Form::text('numUsers', $numUsers, array('id' => 'numUsers', 'maxlength' => '2')) }} <br>
		{{ Form::label('phoneNumber', 'Phone Number:') }}
		{{ Form::checkbox('phoneNumber') }} <br>
		{{ Form::label('profile', 'Profile:') }}
		{{ Form::checkbox('profile') }} <br><br>
		{{ Form::submit('Get Users', array('id' => 'generateUsers')) }} 
	{{ Form::close()}}

	{{-- CHANGE TO ARRAY LENGTH --}}

	@if (isset($users))
		@for ($i=0; $i < $numUsers; $i++) 
			{{ $users[$i] }}
		@endfor
	@endif	

@stop	