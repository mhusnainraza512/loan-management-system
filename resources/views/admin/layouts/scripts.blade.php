  <!-- BEGIN VENDOR JS-->
  <script src="{{  asset('/public/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{  asset('/public/app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
  <script src="{{  asset('/public/app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
  <script src="{{  asset('/public/app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
  <script src="{{  asset('/public/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"type="text/javascript"></script>
  <script src="{{  asset('/public/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"type="text/javascript"></script>
  <script src="{{  asset('/public/app-assets/data/jvector/visitor-data.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{  asset('/public/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{  asset('/public/app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{  asset('/public/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{  asset('/public/app-assets/js/scripts/pages/dashboard-sales.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  <!-- BEGIN DATA TABLES JS-->
  <script src="{{ asset('/public/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
  <script src="{{ asset('/public//app-assets/js/scripts/tables/datatables/datatable-basic.js') }}"></script>

  @if (request()->secure())
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
  @else
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
  @endif
  <!-- END DATA TABLES JS-->



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