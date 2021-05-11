@extends("layouts.main")

@section("pageTitle")
Prodotto - {{$pasta["titolo"]}}
@endsection

@section("main")
<section class="prodotto">
  <div class="container">
    <h1>{{$pasta["titolo"]}}</h1>

    <img src="{{$pasta["src-h"]}}" alt="{{$pasta["titolo"]}}">
    <img src="{{$pasta["src-p"]}}" alt="{{$pasta["titolo"]}}">

    <p>{!!$pasta["descrizione"]!!}</p>
  </div>

  <a href="{{route("prodotto", ["id" => $prevId])}}">
    <div class="slider slider--l">
      <i class="fas fa-chevron-left"></i>
    </div>
  </a>

  <a href="{{route("prodotto", ["id" => $nextId])}}">
    <div class="slider slider--r">
      <i class="fas fa-chevron-right"></i>
    </div>
  </a>

</section>
@endsection
