<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('css/vendor.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/default/app.min.css') }}" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="{{ asset('plugins/jvectormap-next/jquery-jvectormap.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	<!-- ================== END page-css ================== -->
</head>
<body>
    <main class="py-4">
        @yield('content')
    </main>
    <!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('js/vendor.min.js') }}"></script>
	<script src="{{ asset('js/app.min.js') }}"></script>
	<!-- ================== END core-js ================== -->
	
    <!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
	<script src="{{ asset('plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
	<script src="{{ asset('plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
	<script src="{{ asset('plugins/datatables.net-fixedheader-bs5/js/fixedHeader.bootstrap5.min.js')}}"></script>
	<script src="{{ asset('js/demo/table-manage-fixed-header.demo.js')}}"></script>
	<script src="{{ asset('plugins/@highlightjs/cdn-assets/highlight.min.js')}}"></script>
	<script src="{{ asset('js/demo/render.highlight.js')}}"></script>
	<!-- ================== END page-js ================== -->

	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('plugins/gritter/js/jquery.gritter.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.canvaswrapper.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.colorhelpers.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.saturated.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.browser.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.drawSeries.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.uiConstants.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.time.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.resize.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.pie.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.crosshair.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.categories.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.navigate.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.touchNavigate.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.hover.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.touch.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.selection.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.symbol.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.legend.js')}} "></script>
	<script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}} "></script>
	<script src="{{ asset('plugins/jvectormap-next/jquery-jvectormap.min.js')}} "></script>
	<script src="{{ asset('plugins/jvectormap-content/world-mill.js')}} "></script>
	<script src="{{ asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}} "></script>
	<script src="{{ asset('js/demo/dashboard.js')}} "></script>
	<!-- ================== END page-js ================== -->
</body>