<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Adventure</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ URL::asset('/css/adventure.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/slick.css') }}"/>

  <script>
    window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
  </script>
  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

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

  <header class="flex-center front-page-header">
    <div class="title">
      <div class="subline">
        <span><img src="/imgs/Dashdecoleft.png" class="deco" alt="decorative dash"></span>
          <span class="subtitle">Discover New Zealand</span>
          <span><img src="/imgs/Dashdecoright.png" class="deco" alt="decorative dash"></span>
        </div>
      <h1>Adventure</h1>
    </div>
    <img class="header-border" src="/imgs/Headerborder.png">
  </header>

  <section class="introduction">
    <div class="background-image"><img src="/imgs/Turtle.png" alt="trurtle drawing"></div>
    <div class="text">
      <h2>Quest</h2>
      <p>Here comes a story of text and words and lines, and there will be much more meaning to that part than what I am writing here. This is just placeholder text about words and lines and sentences, where the real text will be awesome and cool and hopefully will fit in the design for which I still need to find a background image, edit it in Photoshop and also create the paint layour for the header. Among other things, like fill the rest of the website.</p>
    </div>
  </section>

  <section class="gallery">
    <div class="slider">
      <!-- <div class="inner-slider"> -->
        <div class="slide active">
          <img class="photo-slide" src="/imgs/pic1.jpg" alt="First slide">
        </div>
        <div class="slide">
          <img class="photo-slide" src="/imgs/pic2.jpg" alt="Second slide">
        </div>
        <div class="slide">
          <img class="photo-slide" src="/imgs/pic3.jpg" alt="Third slide">
        </div>
        <div class="slide">
          <img class="photo-slide" src="/imgs/pic2.jpg" alt="Fourth slide">
        </div>
        <div class="slide">
          <img class="photo-slide" src="/imgs/pic3.jpg" alt="Fifth slide">
        </div>
    </div>
  </section>

  <section>
    <div class="planning container">
      <div class="planning-card">
        <img class="map-illustration" src="/imgs/Kaikouramap.png" alt="map of Kaikoura">
          <div class="planning-heading">
            <h3>Whale watching</h3>
            <span class="subtitle">Awesome wildlife</span>
          </div>
          <div class="planning-intro">
            <p>With a population of approximately 3,800 residents, the Kaikoura
              township is located on a rocky peninsula, protruding from lush
              farmland beneath the mountains. In the waters off the peninsula,
              a complex marine system provides an abundantly rich habitat for
              marine mammals and seabirds making it an ideal place for getting
              ‘close to nature’.</p>
          </div>
      </div>
      <img class="photo-feature" src="/imgs/kaikoura.png" alt="Whale tail above water in Kaikoura">
      </div>
    </div>
  </section>

  <section class="discoveries container">
    <img class="initial" src="/imgs/Initial.png" alt="The first letter of the coming paragraph extensively decorated with natural elements" >
    <div class="discover-heading">
      <h3>A new world to discover</h3>
      <span class="subtitle">The Whale Rider</span>
    </div>
    <p>Paikea was the youngest and favourite son of the chief Uenuku from the
      island of Mangaia in the present day Cook Islands. This favouritism made
      Paikea's elder brothers extremely jealous. They conspired to kill Paikea
      while fishing offshore and tell Uenuku he drowned. But the night before
      the trip Paikea feigned sleep and overheard his brothers plotting. When
      far out to sea Paikea foiled their plan by deliberately sinking the canoe
      and drowning his brothers.</p>
    <p>Now adrift in a great ocean, Paikea clung to a canoe plank and awaited
      his own death. It was then that Tohorā the whale appeared and lifted
      Paikea onto his great back. Tohorā took Paikea south to New Zealand and
      the settlement of Whangara just north of present day Gisborne. Here,
      Paikea began a new and prosperous life.</p>
  </section>

  <section class="gallery-static">
    <div class="gallery-item">
      <img src="/imgs/Gallery5.png" alt="New Zealand image" class="gallery-image">
    </div>
    <div class="gallery-item">
      <img src="/imgs/Gallery3.png" alt="New Zealand image" class="gallery-image">
    </div>
    <div class="gallery-item">
      <img src="/imgs/Gallery2.png" alt="New Zealand image" class="gallery-image">
    </div>
    <div class="gallery-item">
      <img src="/imgs/Gallery1.png" alt="New Zealand image" class="gallery-image">
    </div>
  </section>

  <section class="wildlife">
    <header>
      <h2>Creatures</h2>
      <img class="creature" src="/imgs/Kiwi.png" alt="Kiwi bird illustration">
    </header>
    <div class="fact">
      <h2>24</h2>
      <span class="subtitle">hours</span>
      <hr/>
      <p>to spend on enjoying the other side of the world</p>
    </div>
    <div class="fact">
      <h2>25</h2>
      <span class="subtitle">Whale species</span>
      <hr/>
      <p>live in the waters around New Zealand</p>
    </div>
    <div class="fact">
      <h2>15</h2>
      <span class="subtitle">thousand km of coastline</span>
      <hr/>
      <p>making it the 9th longest in the world</p>
    </div>

  </section>
  <footer>
    <h3>
      Thanks for visiting!
    </h3>
  </footer>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('/js/slick.min.js') }}"></script>
</body>
</html>
