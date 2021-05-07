<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Molisana</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>

  <header>
    <div class="container">
      <div class="logo">
        <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
      </div>

      <nav class="menu">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Prodotti</a></li>
          <li><a href="#">News</a></li>
        </ul>
      </nav>
      <nav class="menu--respo">
        <i class="fas fa-bars"></i>
      </nav>
    </div>



  </header>

  <main>

    <section>
      <div class="container">
        <h2>Le Lunghe</h2>
        <div class="boxes">
          @foreach ($lunga as $pasta)
          <div class="box">
            <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <h2>Le Corte</h2>
        <div class="boxes">
          @foreach ($corta as $pasta)
          <div class="box">
            <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <h2>Le Cortissime</h2>
        <div class="boxes">
          @foreach ($cortissima as $pasta)
          <div class="box">
            <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
          </div>
          @endforeach
        </div>
      </div>
    </section>

  </main>

  <footer>
<div class="container">

<div class="column">
  <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div class="column">
<h3>Pastificio</h3>
<ul>
  <li><a href="#">Le Classiche</a></li>
  <li><a href="#">Le Integrali</a></li>
  <li><a href="#">Le Speciali</a></li>
  <li><a href="#">Le Biologiche</a></li>
  <li><a href="#">Le Gluten-Free</a></li>
  <li><a href="#">Le Semole</a></li>
  <li><a href="#">Le Extra Lusso</a></li>
</ul>
<h3>Prodotti</h3>
<ul>
  <li><a href="#">Le Classiche</a></li>
  <li><a href="#">Le Integrali</a></li>
  <li><a href="#">Le Speciali</a></li>
  <li><a href="#">Le Biologiche</a></li>
  <li><a href="#">Le Gluten-Free</a></li>
  <li><a href="#">Le Semole</a></li>
  <li><a href="#">Le Extra Lusso</a></li>
</ul>
</div>

<div class="column">
<h3>Collezione da Chef</h3>
<ul>
  <li><a href="#">Le Classiche</a></li>
  <li><a href="#">Le Integrali</a></li>
  <li><a href="#">Le Speciali</a></li>
  <li><a href="#">Le Biologiche</a></li>
</ul>
</div>


</div>
  </footer>

</body>

</html>
