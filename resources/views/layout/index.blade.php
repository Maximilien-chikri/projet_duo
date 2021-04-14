<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')
        
    @endenv}}</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">    

    <!-- Custom styles for this template -->
    <link href={{assets('css/style.css')}} rel="stylesheet">
    <link href={{assets('css/responsive.css')}} rel="stylesheet">
    <link href={{assets('css/colors.css')}} rel="stylesheet">
</head>
<body>
    @include('partial.header')

    @yield('content')
    
    @include('partial.footer')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src={{assets('js/bootstrap.min.js')}}></script>
    <script src={{assets('js/jquery.slicknav.min.js')}}></script>
    <script src={{assets('js/slick.min.js')}}></script>
    <script src={{assets('js/skrollr.min.js')}}></script>
    <script src={{assets('js/jquery.countTo.min.js')}}></script>
    <script src={{assets('js/jquery.shuffle.min.js')}}></script>
    <script src={{assets('js/script.js')}}></script>
</body>
</html>