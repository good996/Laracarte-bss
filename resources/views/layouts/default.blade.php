<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{page_title($title ?? '')}}</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome.min.css')}}">
        <link href="{{asset('/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Styles -->

        <style type="text/css">
            body{
                font-family: 'Open Sans', Helvetica, arial, sans-serif;
            }
            footer{
                margin: 4em 0 ;
            }
        </style>

    </head>
    <body>
        @include('layouts.partial._nav')
        @yield('content')
        @include('layouts.partial._footer')
        <script src="{{asset('/js/jquery.min.js')}}"></script>
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    </body>
</html>
