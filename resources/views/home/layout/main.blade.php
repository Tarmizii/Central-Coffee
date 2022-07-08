<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Central Coffee</title>
    <link rel="stylesheet" href="{{  asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  @include('home.partials.header')

  <div class="container">
    @yield('container')
  </div>

  @include('home.partials.footer')

    <script src="{{  asset('js/bootstrap.budle.min.js')  }}"></script>
</body>
</html>