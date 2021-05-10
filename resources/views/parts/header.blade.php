<header>

  <div class="container">
    <div class="logo">
      <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
    </div>

    <nav class="menu">
      <ul>
        <li class="{{Route::getCurrentRoute()->getName()  == "homepage" ? "active" : "" }}"><a href="{{route("homepage")}}">Home</a></li>
        <li class="{{Route::getCurrentRoute()->getName()  == "prodotti" || "prodotto" ? "active" : "" }}"><a href="{{route("prodotti")}}">Prodotti</a></li>
        <li class="{{Route::getCurrentRoute()->getName()  == "news" ? "active" : "" }}"><a href="{{route("news")}}">News</a></li>
      </ul>
    </nav>
    <nav class="menu--respo">
      <i class="fas fa-bars"></i>
    </nav>
  </div>

</header>
