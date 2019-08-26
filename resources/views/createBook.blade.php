@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">add book</div>
				
				<div class="card-body">
					<form method="POST" action="{{Route('books.store')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

							<div class="col-md-6">
							  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>

							  @error('name')
							  <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							  </span>
							  @enderror
							</div>
						</div>
						<div class="form-group row">
							<label for="author" class="col-md-4 col-form-label text-md-right">Author</label>

							<div class="col-md-6">
							  <select name="author[]" id="author" class="selectpicker" multiple data-live-search="true">
								@foreach($authors as $author)
								<option value="{{$author->id}}">{{$author->first_name}} {{$author->last_name}}</option>
								@endforeach
							  </select>

							  @error('author')
							  <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							  </span>
							  @enderror
							</div>
						</div>
						<div class="form-group row">
						  <label for="page" class="col-md-4 col-form-label text-md-right">Page</label>

							<div class="col-md-6">
							  <input id="page" type="text" class="form-control @error('page') is-invalid @enderror" name="page" required>

							  @error('page')
							  <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							  </span>
							  @enderror
							</div>
						</div>
						<div class="form-group row">
						  <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

							<div class="col-md-6">
							  <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required>

							  @error('description')
							  <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							  </span>
							  @enderror
							</div>
						</div>
						<div class="form-group row">
							<label for="picture" class="col-md-4 col-form-label text-md-right">picture</label>

							<div class="col-md-6">
							  <input id="picture" type="file" class="form-control @error('picture') is-invalid @enderror" name="picture">

							  @error('picture')
							  <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							  </span>
							  @enderror
							</div>
						</div>

						<hr style="background-color: #52bcd3;">
						<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection