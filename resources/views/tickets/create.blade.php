@extends( 'layouts.default' )
 
@section( 'title', 'Open Ticket' )
 
@section( 'content' )

<div class="container">

	<div class="row justify-content-center">
	
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">Open New Ticket</div>
 
				<div class="card-body">
 
 
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
 
					<form class="form-horizontal" role="form" method="POST">
						{!! csrf_field() !!}
 
						<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
							<label for="title" class="control-label">Title</label>
 
							<input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">
 
							@if ($errors->has('title'))
								<span class="help-block">
									<strong>{{ $errors->first('title') }}</strong>
								</span>
							@endif

						</div>
 
						<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
							<label for="category" class="control-label">Category</label>
 
							<select id="category" type="category" class="form-control" name="category">
								<option value="">Select Category</option>
								@foreach ($categories as $category)
									<option value="{{ $category->id }}" @if ( $category->id == old( 'category' ) ) selected @endif>{{ $category->name }}</option>
								@endforeach
							</select>
 
							@if ($errors->has('category'))
								<span class="help-block">
									<strong>{{ $errors->first('category') }}</strong>
								</span>
							@endif
						</div>

						<div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
							<label for="priority" class="control-label">Priority</label>
 
							<select id="priority" type="" class="form-control" name="priority">
								@foreach ($priorities as $priority)
									<option value="{{ $priority->id }}" @if( $priority->id===old( 'class_id' ) ) selected @endif>{{ $priority->name }}</option>
								@endforeach
							</select>
 
							@if ($errors->has('priority'))
								<span class="help-block">
									<strong>{{ $errors->first('priority') }}</strong>
								</span>
							@endif
						</div>
 
						<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
							<label for="summary" class="control-label">Message</label>
 
							<textarea rows="10" id="summary" class="form-control" name="summary">{{ old( 'summary' ) }}</textarea>
 
							@if ($errors->has('summary'))
								<span class="help-block">
									<strong>{{ $errors->first('summary') }}</strong>
								</span>
							@endif
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								Open Ticket
							</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection