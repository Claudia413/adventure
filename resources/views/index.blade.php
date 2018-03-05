<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Adventure</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ URL::asset('/css/adventure.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- Navigation desktop -->
  <nav class="navbar navbar-toggleable-sm navbar-inverse bg-transparent">
    <a class="navbar-brand" href="/">
      <img src="/imgs/Mountains2.png" class="navbar-logo"/>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Route</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Planning</a>
        </li>
      </ul>
    </div>
  </nav>


  <header class="flex-center">
    <div class="title">
      <div class="subline">
        <span><img src="/imgs/Dashdecoleft.png" class="deco" alt="decorative dash"></span>
          <span class="subtitle">Discover New Zealand</span>
          <span><img src="/imgs/Dashdecoright.png" class="deco" alt="decorative dash"></span>
        </div>
      <h1>Adventure</h1>
    </div>
  </header>

  <section class="introduction">
    <div class="text">
      <h2>Quest</h2>
      <p>Here comes a story of text and words and lines, and there will be much more meaning to that part than what I am writing here. This is just placeholder text about words and lines and sentences, where the real text will be awesome and cool and hopefully will fit in the design for which I still need to find a background image, edit it in Photoshop and also create the paint layour for the header. Among other things, like fill the rest of the website.</p>
    </div>
  </section>

</body>
</html>
