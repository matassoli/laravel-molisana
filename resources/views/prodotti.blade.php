@extends("layouts.main")

@section("pageTitle")
Prodotti - La Molisana
@endsection

@section("main")
  <section>
    <div class="container">
      <h2>Le Lunghe</h2>
      <div class="boxes">
      @foreach ($lunga as $pasta)
        <a href="{{route("prodotto", ["id" => $pasta["id"] ])}}"><div class="box">
          <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
        </a></div>
      @endforeach
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <h2>Le Corte</h2>
      <div class="boxes">
        @foreach ($corta as $pasta)
        <a href="{{route("prodotto", ["id" => $pasta["id"] ])}}"><div class="box">
          <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
        </a></div>
        @endforeach
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <h2>Le Cortissime</h2>
      <div class="boxes">
        @foreach ($cortissima as $pasta)
        <a href="{{route("prodotto", ["id" => $pasta["id"] ])}}"><div class="box">
          <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
        </div>
        @endforeach
      </a></div>
    </div>
  </section>
@endsection
