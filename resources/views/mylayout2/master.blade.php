<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title>@yield('title')</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- jQuery -->
<script src="{{asset('/asstes2/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="{{asset('/asstes2/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{asset('/asstes2/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="asset('/asstes2/fonts/fontawesome/css/fontawesome-all.min.css')" type="text/css" rel="stylesheet">

<!-- plugin: fancybox  -->
<script src="{{asset('/asstes2/plugins/fancybox/fancybox.min.js')}}" type="text/javascript"></script>
<link href="{{asset('/asstes2/plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="{{asset('/asstes2/css/ui.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('/asstes2/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="{{asset('/asstes2/js/script.js')}}" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>
<header class="section-header">

@include('mylayout2.header')

<section class="header-main bg">
	<div class="container">
<div class="row align-items-center">
	<div class="col-md-4">
	<div class="brand-wrap">
		<img class="logo" src="{{asset('/asstes2/images/logo-dark.png')}}">
		<h2 class="logo-text">LOGO</h2>
	</div> <!-- brand-wrap.// -->
	</div>
	<div class="col-md-4">

	</div> <!-- col.// -->
	<div class="col-md-4">
			<form action="#" class="widget-header float-right">
				<div class="input-group">
				    <input type="text" class="form-control" placeholder="Search">
				    <div class="input-group-append">
				      <button class="btn btn-primary" type="submit">
				        <i class="fa fa-search"></i>
				      </button>
				    </div>
			    </div>
			</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->

</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->


<section class="section-content padding-y">
<div class="container">

<header class="section-heading">
	<h2>Section name</h2>
</header><!-- sect-heading -->

<article>

<img src="{{asset('/asstes2/images/brand.png')}}" class="float-right">

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<br><br><br><br><br><br><br><br><br>

</article>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->

@include('mylayout2.footer')

<!-- ========================= FOOTER END // ========================= -->


</body>
</html>