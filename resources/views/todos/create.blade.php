@extends("layouts.todo")

@section("content")
<h3>Create Todo</h3>

<form action="{{ route('todo.store') }}" method="post" accept-charset="utf-8">
	@csrf
	<div>
		<label>Title</label>
		<input type="text" value="" name="title" id="title"/>
		@if($errors->has("title"))
			<span>{{ $errors->first("title") }}</span>
		@endif
	</div>

	<div>
		<label>Description</label>
		<input type="text" value="" name="body" id="body"/>
		@if($errors->has("body"))
			<span>{{ $errors->first("body") }}</span>
		@endif
	</div>

	<button id="submit-btn" type="submit">Create</button>
</form>
@endsection
