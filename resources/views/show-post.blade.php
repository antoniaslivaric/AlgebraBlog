@extends('Centaur::layout')

@section('title')
		{{ $post->title }}
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->title }}</h1>
			<time>{{ $post->created_at }}</time>
			<div>
				{{ $post->content }}
			</div>
		</div>
	</div>
	
	<hr>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>Comments</h2>
		</div>
	</div>
	
	<hr>
	@if(Sentinel::check())
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<a href="">Comment</a>
			</div>
		</div>
	@endif
@stop