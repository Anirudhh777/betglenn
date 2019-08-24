@extends('app')
@section('front-page')

<div class="container">
	<a href="{{ url('/generate_game_week') }}">Generate Game Week</a>
</div>

@endsection()