@extends('layouts.main')

@section('content')
    <h1>TRAINS</h1>
    <ul>
        @forelse ($trains as $train)
            <li>
                Azienda: {{ $train->company }}
            </li>
            <li>
                Stazione di partenza: {{ $train->departure_station }}
            </li>
            <li>
                Stazione di arrivo: {{ $train->arrival_station }}
            </li>
            <li>
                Orario di partenza: {{ $train->departure_time }}
            </li>
            <li>
                Orario di arrivo: {{ $train->arrival_time }}
            </li>
            <li>
                Codice treno: {{ $train->train_code }}
            </li>
            <li>
                Numero carrozza: {{ $train->number_of_carriages }}
            </li>
            <li>
                In orario: {{ $train->is_in_time }}
            </li>
            <li>
                Cancellato: {{ $train->is_cancelled }}
            </li>
            <br>
        @empty
            <li>
                No trains found
            </li>
        @endforelse
    </ul>