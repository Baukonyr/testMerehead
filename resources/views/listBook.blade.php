@extends('layouts.app')

@section('content')

<div class="row">
@foreach($books as $book)
	<div class="col-2" style="margin-top: 5px; margin-left: 100px;">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top"  src="{{asset('storage/' . $book->picture)}}" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">{{$book->name}}</h5>
			<h6 class="card-subtitle mb-2 text-muted">Count page: {{$book->page}}</h6>
			<h5 class="card-title">Authors</h5>
			@foreach ($book->authors as $author)
				<h6 class="card-subtitle mb-2 text-muted">{{$author->first_name}} {{$author->last_name}}</h6>
			@endforeach
			<p class="card-text">{{$book->description}}</p>
		  </div>
		</div>
	</div>
@endforeach
</div>
<div style="margin-top: 5px; margin-left: 100px;">
{{ $books->links() }}
</div>

@endsection