@extends('app')

@section('content')
	
	<h1>Write a new article </h1>

	</hr>

	{!! Form::open() !!}

		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name') !!}

	{!! Form::close() !!}

@stop