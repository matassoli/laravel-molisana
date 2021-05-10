@extends("layouts.main")

@section("pageTitle")
Prodotto - La Molisana
@endsection

@section("main")
<section class="prodotto">
  <div class="container">

      <h1>{{$pasta["titolo"]}}</h1>


  <img src="{{$pasta["src-h"]}}" alt="{{$pasta["titolo"]}}">
  <img src="{{$pasta["src-p"]}}" alt="{{$pasta["titolo"]}}">

  <p>{!!$pasta["descrizione"]!!}</p>
</div>

</section>
@endsection
