<header>

  <div class="container">
    <div class="logo">
      <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
    </div>

    <nav class="menu">
      <ul>
        <li class="active"><a href="{{route("homepage")}}">Home</a></li>
        <li><a href="{{route("prodotti")}}">Prodotti</a></li>
        <li><a href="{{route("news")}}">News</a></li>
      </ul>
    </nav>
    <nav class="menu--respo">
      <i class="fas fa-bars"></i>
    </nav>
  </div>

</header>
