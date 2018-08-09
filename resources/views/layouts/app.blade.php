<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Photoshow</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  </head>
  <body>
    @include('inc.topbar')
    <br>
    <div class="row">
      @include('inc.messages')
      @yield('content')
    </div>

  </body>
</html>
