<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Premium Bikes</title>

    <link rel="stylesheet" href="{{ URL::asset('/css/table.css') }}">

    <link rel="icon" href="{{ URL::asset('/favicon/icon.png') }}" type="image/x-png"/>

    <link href="{{asset('css/style.min.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link  type="text/css" href="{{asset('css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">
</head>
<body class="navbar-dark" data-base-url="/">

<div class="p-2 mt-2" id="app">
        <div class="page-content">

            @yield('content')

        </div>
</div>



<!-- base js -->
<script src="{{asset('js/core.js')}}"></script>
<script src="{{asset('js/feather.min.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
<!-- end base js -->

<!-- plugin js -->
<script src="{{asset('js/prism.js')}}"></script>
<script src="{{asset('js/clipboard.min.js')}}"></script>
<!-- end plugin js -->

<!-- common js -->
<script src="{{asset('js/template.js')}}"></script>
<!-- end common js -->

<script type="text/javascript" charset="utf8" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" charset="utf8" src="{{asset('js/jquery.form.js')}}"></script>
<script type="text/javascript" charset="utf8" src="{{asset('js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
@yield('user-script')
</body>
</html>
