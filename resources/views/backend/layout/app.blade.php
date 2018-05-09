<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="SmartUniversity" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{asset('backend/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <!--bootstrap -->
    <link href="{{asset('backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- morris chart -->
    <link href="{{asset('backend/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{asset('backend/plugins/material/material.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/material_style.css')}}">
    <!-- animation -->
    <link href="{{asset('backend/css/pages/animate_page.css" rel="stylesheet')}}">
    <!-- Template Styles -->
    <link href="{{asset('backend/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('backend/img/favicon.ico')}}" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">
<div id="app">
    @yield('content')
</div>
<!-- start js include path -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}" ></script>
<script src="{{asset('backend/plugins/popper/popper.min.js')}}" ></script>
<script src="{{asset('backend/plugins/jquery-blockui/jquery.blockui.min.js')}}" ></script>
<script src="{{asset('backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
<script src="{{asset('backend/plugins/sparkline/jquery.sparkline.min.js')}}" ></script>
<script src="{{asset('backend/js/pages/sparkline/sparkline-data.js')}}" ></script>
<!-- Common js-->
<script src="{{asset('backend/js/app.js')}}" ></script>
<script src="{{asset('backend/js/layout.js')}}" ></script>
<script src="{{asset('backend/js/theme-color.js')}}" ></script>
<!-- material -->
<script src="{{asset('backend/plugins/material/material.min.js')}}"></script>
<!-- animation -->
<script src="{{asset('backend/js/pages/ui/animations.js')}}" ></script>
<!-- morris chart -->
<script src="{{asset('backend/plugins/morris/morris.min.js')}}" ></script>
<script src="{{asset('backend/plugins/morris/raphael-min.js')}}" ></script>
<script src="{{asset('backend/js/pages/chart/morris/morris_home_data.js')}}" ></script>
</div>
<!-- end js include path -->
</body>
</html>