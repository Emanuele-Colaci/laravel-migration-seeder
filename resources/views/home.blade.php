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
                        <p>Data partenza: <strong>{{ $train->data_partenza }}</strong></p>
                        <p>Data odierna: <strong>{{ $train->data_odierna }}</strong></p>
                        @if($train->data_partenza !== $train->data_odierna)
                            <h3>Oggi non partirò</h3>
                        @else
                            <h3>Io oggi parto</h3>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <h1 class="mb-3">Videogames</h1>
            @foreach($videogame as $videogame)
                <div class="col-4">
                    <div class="card p-3 mb-3">
                        <h3>Nome Gioco: <strong>{{ $videogame->nome }}</strong></h3>
                        <p>Prezzo: <strong>{{ $videogame->prezzo }}</strong></p>
                        <p>Maggiore di 18 anni: <strong>{{ $videogame->maggiore_18_anni ? 'Si' : 'No' }}</strong></p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
