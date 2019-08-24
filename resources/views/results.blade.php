@extends('app')
@section('front-page')


<div class="container">
	<div class="results">
		@foreach($accums as $accum)
			<div class="accums">
				@foreach($accum as $data)
					<div class="match">
						<div class="level" id="{{ $data['level'] }}">
							{{ $data['level'] }}
						</div>
						<div class="match_info">
							<p>{{ $data['match'] }}</p>
						</div>
						
					</div>
				@endforeach
			</div>
		@endforeach
	</div>
	
</div>

@endsection()