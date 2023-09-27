<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <h1>Treni: </h1>
        <div class="d-flex gap-3 flex-wrap">
            @foreach ($trains as $train)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Azienda: {{ $train->azienda }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Stazione di Partenza:
                            {{ $train->stazione_di_partenza }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Stazione di Arrivo:
                            {{ $train->stazione_di_arrivo }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Orario di Partenza:
                            {{ $train->orario_di_partenza }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Orario di Arrivo:
                            {{ $train->orario_di_arrivo }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Codice Treno: {{ $train->codice_treno }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Numero Carrozze:
                            {{ $train->numero_carrozze }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Ritardo :
                            @if ($train->in_orario = 1)
                                Sì
                            @else
                                No
                            @endif
                        </h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Stato Treno:
                            @if ($train->cancellato = 1)
                                Sì
                            @else
                                No
                            @endif
                        </h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
