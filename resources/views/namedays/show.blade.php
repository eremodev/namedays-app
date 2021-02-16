@extends('layouts.app')

@section('content')
<section class="content">
	<div class="selected-nameday-wrapper">
		<div class="nameday-window">
			<h1>{{ $data->name }}</h1>
			<h3>
				<i class="far fa-calendar-alt"></i>
				{{ $data->date }}
			</h3>
			<a href="{{ url('/') }}">
				<i class="fas fa-home"></i>
				Domov
			</a>
		</div>
	</div>

</section>
@endsection