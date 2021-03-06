<link rel="shortcut icon" href="" />
<title>{{ config('app.name') }} | @yield('title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"rel="stylesheet">
<!-- //for-mobile-apps -->
<link href="{{ asset('/public/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ asset('/public/assets/css/pignose.layerslider.css') }}" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="{{ asset('/public/assets/css/jquery-ui.css') }}">

<!-- //pignose css -->
<link href="{{ asset('/public/assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('/public/assets/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
@if (request()->secure())
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@else
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endif

@yield('css')
