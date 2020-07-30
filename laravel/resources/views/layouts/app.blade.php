<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
  </body>
</html>
