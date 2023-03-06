<!DOCTYPE html>

<!-- test -->
<!-- test -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center mt-5 mb-5"> Carte collezionabili magic </h1>

    <div class="d-flex flex-wrap card-container container">
        @foreach ($cards as $card)
            <div class="single-card d-flex flex-column align-items-center">
                
                <img src="{{$card->img}}" alt="immagine">
                <a href="{{route('card.show', $card['id'])}}" class="btn-primary btn mt-3 mb-5">visualizza</a>

            </div>
        @endforeach
    </div>

</body>

</html>