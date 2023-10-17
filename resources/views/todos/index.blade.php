@extends("layouts.todo")

@section("content")

<table>
	<thead><th>Title</th><th>Snippet</th></thead>

	<tbody>
	@forelse ($todos as $todo)
		<tr>
			<td>{{ $todo->title }}</td>
			<td>{{ $todo->body }}</td>
		</tr>
	@empty
	@endforelse
	</tbody>
</table>

@endsection
