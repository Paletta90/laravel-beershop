<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

    <title>Beers</title>
</head>
<body>
    <h1 class="text-center">Beers</h1>

    <div class="container">
        @forelse ($beers as $key => $beer)
            <div class="col card bg-warning bg-gradient text-dark border py-3 my-3">
                <div class="card-body">
                    <h5 class="card-title h6 text-center mb-4">{{ $beer->nome }}</h5>
                    
                    <p class="card-text"><strong>Colore </strong>{{ $beer->colore }}</p>
                    <p class="card-text"><strong>Prezzo </strong>{{ $beer->prezzo }}</p>
                    <p class="card-text"><strong>Gradazione </strong>{{ $beer->tasso_alcolico }}</p>
                    <p class="card-text"><strong>Descrizione: </strong>{{ $beer->descrizione }}</p>
                </div>
            </div>  
        @empty
            <p class="text-center">Non sono presenti birre.</p>
        @endforelse
    </div>

    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>