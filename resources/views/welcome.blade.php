@extends('layouts/app')

@section('contentMain')
    @foreach ($trains as $train)
        <div class="cards p-4">
            <div class="border p-3">
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
        </div>
    @endforeach
@endsection
