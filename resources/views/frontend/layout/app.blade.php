<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Victoria Palace Hotel | Home1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('frontend/images/apple-touch-icon.png')}}" type="images/x-icon" rel="shortcut icon">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('frontend/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('frontend/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- customizer style css -->
    <link href="#" data-style="styles" rel="stylesheet">



    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Pre Loader
============================================ -->
<div class="preloader">
    <div class="loading-center">
        <div class="loading-center-absolute">
            <div class="object object_one"></div>
            <div class="object object_two"></div>
            <div class="object object_three"></div>
        </div>
    </div>
</div>

<div id="app">
    @yield('content')
</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{asset('frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap framework js -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!--counter up js-->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<!-- Video player js -->
<script src="{{asset('frontend/js/video-player.js')}}"></script>
<!-- headlines js -->
<script src="{{asset('frontend/js/animated-headlines.js')}}"></script>
<!-- Ajax mail js -->
<script src="{{asset('frontend/js/mailchimp.js')}}"></script>
<!-- Ajax mail js -->
<script src="{{asset('frontend/js/ajax-mail.js')}}"></script>
<!-- parallax js -->
<script src="{{asset('frontend/js/parallax.js')}}"></script>
<!-- textilate js -->
<script src="{{asset('frontend/js/textilate.js')}}"></script>
<script src="{{asset('frontend/js/lettering.js')}}"></script>
<!--isotope js-->
<script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/packery-mode.pkgd.min.js')}}"></script>
<!-- Owl carousel Js -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<!--Magnificant js-->
<script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>