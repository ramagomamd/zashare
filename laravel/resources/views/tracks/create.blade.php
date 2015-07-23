@extends('app')

@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Upload New Tracks</strong> <small>Here!</small>
	</div>
	@include('errors.list')
	
	<div class="panel-body">
		<h4>Select Files From Your Computer</h4>
		
		{!! Form::open(['route' => 'tracks.store', 'files' => true]) !!}
		
		<div class="form-inline">
			<div class="form-group">
				{!! Form::file('track') !!}
			</div>
			
			{!! Form::submit('Upload File', ['class' => 'btn btn-sm btn-primary']) !!}
		</div>
		
		{!! Form::close() !!}
	</div>
	
	
</div>

@endsection