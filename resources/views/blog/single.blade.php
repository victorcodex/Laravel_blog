@extends('main')

@section('title', "| $post->title ")

@section('content')

	<div class="row">
		<div class="col-md-8 col-offset-2">
			<h1>{{ $post->title }}</h1>
			<p>{{ $post->body }}</p>
			<hr>

			<p>Posted In: {{ $post->category->updated_at }} </p>
		</div>

		<div class="col-md-2">
			<p><a href="{{ url('blog') }}" class="btn btn-default"><< Back to Blog</a></p>
		</div>
	</div>

@endsection