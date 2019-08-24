@extends('app')
@section('front-page')

<div class="container">
	<div class="create">
		<form role="form" method="POST" action="{{ url('/game_week_submit') }}">
			{{ csrf_field() }}
			<label>Select No. Of Sets</label>
			<input type="number" name="sets" class="form-control custom-form" required="" min="3" max="10">
			<!-- <label>Max Teams Per Set</label>
			<input type="number" name="max_teams" class="form-control custom-form" required=""> -->
			<input type="hidden" name="no_of_matches" value="8" class="matches">
			<label>Select Matches</label>
			<div class="match_pick">
				<!-- <input type="hidden" name="match1" value="" class="match_val"> -->
				<select class="selectpicker teams" title="Select Home Team" name="home_team1"  data-live-search="true" required=""></select>
				<select class="selectpicker teams" title="Select Away Team" name="away_team1" data-live-search="true" required=""></select>
				<select name="level1" title="Select Match Level" class="selectpicker" required="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				</select>
			</div>
			<div class="match_pick">
				<select class="selectpicker teams" title="Select Home Team" name="home_team2"  data-live-search="true" required=""></select>
				<select class="selectpicker teams" title="Select Away Team" name="away_team2" data-live-search="true" required=""></select>
				<select name="level2" title="Select Match Level" class="selectpicker" required="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				</select>
			</div>
			<div class="match_pick">
				<select class="selectpicker teams" title="Select Home Team" name="home_team3"  data-live-search="true" required=""></select>
				<select class="selectpicker teams" title="Select Away Team" name="away_team3" data-live-search="true" required=""></select>
				<select name="level3" title="Select Match Level" class="selectpicker" required="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				</select>
			</div>
			<div class="match_pick">
				<select class="selectpicker teams" title="Select Home Team" name="home_team4"  data-live-search="true" required=""></select>
				<select class="selectpicker teams" title="Select Away Team" name="away_team4" data-live-search="true" required=""></select>
				<select name="level4" title="Select Match Level" class="selectpicker" required="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				</select>
			</div>
			<div class="match_pick">
				<select class="selectpicker teams" title="Select Home Team" name="home_team5"  data-live-search="true" required=""></select>
				<select class="selectpicker teams" title="Select Away Team" name="away_team5" data-live-search="true" required=""></select>
				<select name="level5" title="Select Match Level" class="selectpicker" required="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				</select>
			</div>
			<div class="match_pick">
				<select class="selectpicker teams" title="Select Home Team" name="home_team6"  data-live-search="true" required=""></select>
				<select class="selectpicker teams" title="Select Away Team" name="away_team6" data-live-search="true" required=""></select>
				<select name="level6" title="Select Match Level" class="selectpicker" required="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				</select>
			</div>
			<div class="match_pick">
				<select class="selectpicker teams" title="Select Home Team" name="home_team7"  data-live-search="true" required=""></select>
				<select class="selectpicker teams" title="Select Away Team" name="away_team7" data-live-search="true" required=""></select>
				<select name="level7" title="Select Match Level" class="selectpicker" required="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				</select>
			</div>
			<div class="match_pick">
				<select class="selectpicker teams" title="Select Home Team" name="home_team8"  data-live-search="true" required=""></select>
				<select class="selectpicker teams" title="Select Away Team" name="away_team8" data-live-search="true" required=""></select>
				<select name="level8" title="Select Match Level" class="selectpicker" required="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				</select>
			</div>
			<button class="addMatch">Add Match</button>
			<button class="selectRandom">Randomize</button>
			<input type="submit" name="Submit" value="Submit">
		</form>
	</div>
	
</div>

@endsection()