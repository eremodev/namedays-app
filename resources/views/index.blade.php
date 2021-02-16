@extends('layouts.app')

@section('content')
<section class="content">

	<div class="actual-nameday-wrapper">
		<div class="actual-nameday">
		<span>
			Dnes je
			<strong>{{ ucfirst(\Carbon\Carbon::now()->locale('sk_SK')->dayName) }}</strong>
			{{ date('d.m.Y') }}
		</span>
		<p>
			Kto má dnes meniny?
		</p>
		<h1>
			@foreach ($datas as $data)
				@if (date('d.m') === $data->date)
					{{ $data->name }}
				@endif
			@endforeach
		</h1>
	</div>
	</div>
	<div class="search-area-wrapper">
		<div class="search-area">
		<input type="text" id="search" class="inp-search typeahead" placeholder="Vyhľadať meniny podľa mena..." autocomplete="off">
		<div class="search-icon">
			<i class="fas fa-search"></i>
		</div>
	</div>
	</div>
</section>
@endsection
