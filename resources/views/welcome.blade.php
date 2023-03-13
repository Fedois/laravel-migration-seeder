<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>database Trains</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main class="">
            @foreach ($trains as $train)
                <div class="border p-5">
                    <h4>nome del treno</h4>
                    <p>{{ $train->azienda }}</p>

                    <h4>stazione di partenza</h4>
                    <p>{{ $train->stazione_partenza }}</p>

                    <h4>stazione di arrivo</h4>
                    <p>{{ $train->stazione_arrivo }}</p>

                    <h4>orario partenza</h4>
                    <p>{{ $train->orario_partenza }}</p>

                    <h4>orario arrivo</h4>
                    <p>{{ $train->orario_arrivo }}</p>

                    <h4>codice</h4>
                    <p>{{ $train->codice_treno }}</p>

                    <h4>numero carrozze</h4>
                    <p>{{ $train->n_carrozze }}</p>

                    <h4>in orario</h4>
                    @if ($train->in_orario)
                    <p>si</p>
                    @else
                    <p>no</p>
                    @endif

                    <h4>cancellato</h4>
                    @if ($train->cancellato)
                    <p>si</p>
                    @else
                    <p>no</p>
                    @endif
                </div>
            @endforeach
        </main>

    </body>
</html>
