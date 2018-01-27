<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Adventure</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ URL::asset('/css/adventure.css') }}" rel="stylesheet" type="text/css">
</head>
<body>


  <nav class="navbar navbar-toggleable-sm navbar-inverse bg-transparent">
    <a class="navbar-brand" href="#"><img src="/imgs/Logo.png" class="navbar-logo"/> Adventure</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="#">Route</a>
        <a class="nav-link" href="#">Planning</a>
      </ul>
    </div>
  </nav>


  <header class="flex-center">
    <div class="title">
      <div class="subtitle">Discover New Zealand</div>
      <h1>Adventure</h1>
    </div>
  </header>
</body>
</html>
