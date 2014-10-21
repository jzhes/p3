@extends('_master')

@section('title')
	Lorem-Ipsum Generator
@stop

@section('head')
	<link rel='stylesheet' href='lorem-ipsum.css' type='text/css'>
@stop

@section('content')
	<h2>Lorem Ipsum Generator</h2>	
	<p>Please enter how many paragraphs you would like to generate (max: 99): </p>
	{{ Form::open(array ('url' => '/lorem-ipsum'))}}
		{{ Form::label('numParas' , 'Number of Paragraphs:') }}
		{{ Form::text('numParas', $numParas, array('id' => 'numParas', 'maxlength' => '2')) }}
		<br>
		{{ Form::submit('Get Paragraphs', array('id' => 'generateParas')) }} 
	{{ Form::close () }}
	
	@if (isset ($paragraphs))
		{{ implode('<p>', $paragraphs) }}
	@else
		numUsers is not set
	@endif	
	
@stop	