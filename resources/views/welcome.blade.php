<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main class="d-flex justify-content-between">
            @foreach ($trains as $train)
                <div>
                    <p>{{ $train->azienda }}</p>
                    <p>{{ $train->stazione_partenza }}</p>
                    <p>{{ $train->stazione_arrivo }}</p>
                    <p>{{ $train->orario_partenza }}</p>
                    <p>{{ $train->orario_arrivo }}</p>
                    <p>{{ $train->codice_treno }}</p>
                    <p>{{ $train->n_carrozze }}</p>
                    <p>{{ $train->in_orario }}</p>
                    <p>{{ $train->cancellato }}</p>
                </div>
            @endforeach
        </main>

    </body>
</html>
