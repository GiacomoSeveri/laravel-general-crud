<!DOCTYPE html>


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
    <h1 class="text-center"> Carte collezionabili magic </h1>

    <div class="d-flex flex-wrap card-container container">
        @foreach ($cards as $card)
            <div class="single-card">
                
                <img src="{{$card->img}}" alt="immagine">

            </div>
        @endforeach
    </div>

</body>

</html>