@extends('layout.app')

@section('content') 
    <div class="container">
        <div class="row mt-5">
            <h1 class="mb-3">Trains</h1>
            @foreach($trains as $train)
                <div class="col-4">
                    <div class="card p-3 mb-3">
                        <h3>Azienda: <strong>{{ $train->azienda }}</strong></h3>
                        <p>Stazione di partenza: <strong>{{ $train->stazione_di_partenza }}</strong></p>
                        <p>Stazione di arrivo: <strong>{{ $train->stazione_di_arrivo }}</strong></p>
                        <p>Orario partenza: <strong>{{ $train->orario_partenza }}</strong></p>
                        <p>Orario arrivo: <strong>{{ $train->orario_arrivo }}</strong></p>
                        <p>Codice treno: <strong>{{ $train->codice_treno }}</strong></p>
                        <p>Numero carrozze: <strong>{{ $train->numero_carrozze }}</strong></p>
                        <p>In orario: <strong>{{ $train->in_orario ? 'Si' : 'No' }}</strong></p>
                        <p>Cancellazione: <strong>{{ $train->cancellato ? 'Si' : 'No' }}</strong></p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
