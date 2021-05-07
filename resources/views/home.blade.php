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
</head>

<body>

  <header>
    <div class="container">
      <div class="logo">
        <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
      </div>

      <nav>
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Prodotti</a></li>
          <li><a href="#">News</a></li>
        </ul>
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

  </footer>

</body>

</html>
