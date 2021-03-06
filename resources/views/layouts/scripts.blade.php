<!-- cart -->
	<script src="{{ asset('/public/assets/js/simpleCart.min.js') }}"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ asset('/public/assets/js/bootstrap-3.1.1.min.js') }}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{ asset('/public/assets/js/jquery.easing.min.js') }}"></script>
@if (request()->secure())
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
@else
	<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
@endif

@if(session()->has('success'))
	<script>
		toastr.info("{{ session()->get('success') }}");
	</script>
	@php
		Session::forget('success')
	@endphp
@endif

@if(session()->has('error'))
	<script>
		toastr.error("{{ session()->get('error') }}");
	</script>
	@php
		Session::forget('error')
	@endphp
@endif

@yield('scripts')
