<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/icofont.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style-1.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
    @stack('css')


<body>

@include('layouts.frontend.partial.header')
    <!-- benar -->
@yield('content')
    
   @include('layouts.frontend.partial.footer')
    <script src="{{('frontend/js/jquery.min.js')}}"></script>
    <script src="{{('frontend/js/bootstrap.js')}}"></script>
    <script src="{{('frontend/js/plugins.min.js')}}"></script>
    <script src="{{('frontend/js/popper.min.js')}}"></script>
    <script src="{{('frontend/js/jquery.meanmenu.js')}}" ></script>
    <script src="{{('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{('frontend/js/app.js')}}"></script>
    <script src="{{('frontend/js/active.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

    @stack('js')

</body>
</html>
