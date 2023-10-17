@extends("layouts.todo")
@section("content")
	<h1>Show Todo</h1>

	<h4>{{ $todo->title }}</h4>
	<p>{{ $todo->body }}</p>

@endsection
