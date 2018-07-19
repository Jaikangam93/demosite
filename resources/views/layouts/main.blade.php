<!DOCTYPE html>
<html lang="en">
<head>
	@include('_partials.head')
	

</head>

<body>

	

	@include('_partials.topnavbar')



	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">


			@yield('body')
			

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
