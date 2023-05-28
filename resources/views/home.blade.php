@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-3 g-3">
            @foreach($trains as $train)
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            {{ $train->azienda }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <strong>
                            Partenza da:
                        </strong>
                         {{ $train->stazione_di_partenza }} <br>
                         <strong>
                            a:
                        </strong>
                        {{ $train->stazione_di_arrivo }}

                        <h6 class="text-uppercase">
                            orario di partenza: {{ $train->orario_di_partenza }}
                        </h6>
                    </div>
                    <div class="card-footer">
                        {{ $train->codice_treno }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection