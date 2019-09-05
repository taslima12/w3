<!DOCTYPE html>
<!-- saved from url=(0043)http://w3programmers.com/bangla/demos/blog/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">

		<!-- icons -->
		<link rel="apple-touch-icon" href="http://w3programmers.com/bangla/demos/blog/assets/img/apple-touch-icon.png">
		<link rel="shortcut icon" href="http://w3programmers.com/bangla/demos/blog/favicon.ico">

		<!-- Bootstrap Core CSS file -->
		<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">

		<!-- Conditional comment containing JS files for IE6 - 8 -->
		<!--[if lt IE 9]>
			<script src="{{ asset('/assets/js/html5.js') }}"></script>
			<script src="{{ asset('/assets/js/respond.min.js') }}"></script>
		<![endif]-->
	</head>
	<body>

		<!-- Navigation -->
	    
	    @include('mylayout.header')
	    
		<!-- /.navbar -->

		<!-- Page Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						@yield('content')
					</div>
				</div>
			</div>


			<!-- /.row -->

			<div class="row">
				<div class="col-sm-8">

					<!-- Image -->
					<figure class="margin-b-2">
						<img class="img-responsive" src="assets/image/Laravel.jpg" alt="">
						<figcaption class="margin-t-h">Laravel 5.5 Blade Templating</figcaption>
					</figure>

					<p class="lead">Lorem ipsum dolor sit amet consect etuer adipi scing elit sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam erat volut. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>
					<p>Vivamus risus ex, varius et libero quis, placerat rhoncus mi. Aenean sit amet aliquam nibh. Aliquam tortor est, consequat vitae libero at, vehicula mattis tellus. In condimentum consequat tempor. Nullam at lorem semper, ultricies mi et, mollis turpis. Mauris ut leo ac magna dapibus luctus. Mauris mi nibh, ornare et ipsum vel, finibus molestie nulla. Nunc eleifend leo eget ipsum pellentesque, vel varius ipsum placerat. Mauris tincidunt sapien et efficitur commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec at pellentesque arcu. Pellentesque justo enim, porttitor a arcu non, mollis venenatis felis.</p>
					<p>Praesent viverra pellentesque enim, vitae porta erat elementum quis. Maecenas posuere mattis velit rutrum iaculis. Duis non efficitur nibh. Aliquam laoreet risus a nulla auctor interdum. Ut cursus leo eu justo laoreet porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse vitae nisi dictum, vulputate odio sed, blandit tortor. Fusce eu turpis ut mi porta bibendum nec eu libero.</p>
					
					<hr>

					

					

					<!-- Pager -->
					<nav>
						<ul class="pager">
							<li class="previous"><a href="http://w3programmers.com/bangla/demos/blog/#"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Older</a></li>
							<li class="next"><a href="http://w3programmers.com/bangla/demos/blog/#">Newer <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
						</ul>
					</nav>

				</div>
				
				@include('mylayout.sidebar')
				
			</div>
			<!-- /.row -->

			<hr>
			
			@include('mylayout.footer')
			
		</div>
		<!-- /.container-fluid -->

		<!-- JQuery scripts -->
	    <script src="{{ asset('/assets/js/jquery-1.11.2.min.js') }}"></script>

		<!-- Bootstrap Core scripts -->
		<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
  


</body></html>