<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ setting('site.title') }} - {{ setting('site.description') }}</title>
	<link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}">

	<link rel="stylesheet" href="/vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="/vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="/vendors/nice-select/nice-select.css">
	<link rel="stylesheet" href="/vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css">
 	<link rel="stylesheet" href="/css/style.css">

</head>

<body>

	@include('inc.navbar')

	@yield('content')

	@include('inc.footer')

	<script src="/vendors/jquery/jquery-3.2.1.min.js"></script>
  	<script src="/vendors/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="/vendors/skrollr.min.js"></script>
	<script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="/vendors/nice-select/jquery.nice-select.min.js"></script>
	<script src="/vendors/jquery.ajaxchimp.min.js"></script>
	<script src="/vendors/mail-script.js"></script>
	<script src="/js/main.js"></script>

</body>
</html>