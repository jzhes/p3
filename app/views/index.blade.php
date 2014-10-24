@extends('_master')

@section('title')
	Developer's Best Friend
@stop

@section('head')
	<link rel='stylesheet' href='index.css' type='text/css'>
@stop

@section('content')
	<h2>Lorem Ipsum Generator</h2>	
	<p>	Lorem Ipsum text is dummy text is used to simulate real text.  It's purpose is to  
		keep the focus on the design aspect without the distraction from meaningful text. 
	</p>
	<a href="lorem-ipsum">Lorem Ipsum Generator</a>

	<h2>Random User Generator</h2>	
	<p>	The Random Users generator creates user test data for applications. It is similar to
		Lorem Ipsum text but is for people.
	</p>
	<a href="random-user">Generate Random Users</a>

@stop	