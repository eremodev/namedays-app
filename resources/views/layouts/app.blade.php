<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>{{ config('app.name') }}</title>
	<script type="text/javascript">
		var siteUrl = "{{ route('autocomplete') }}";
	</script>
</head>
<body>
    <main class="section">
		@yield('content')
	</main>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script src="https://kit.fontawesome.com/1261b499ba.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>