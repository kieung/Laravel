@extends('app')

@section('content')


<h1>About </h1>

<h3> A List</h3>

<ul>

	@foreach ($items as $item) 
		<li>{{ $item }}</li>
	
	@endforeach

</ul>


<p>
	Of course, the schema builder contains a variety of column types that you may use when building your tables.
</p>

@stop
