<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <h1 class="text-uppercase text-center">Treni in partenza oggi:</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <h3>Treno {{ $train->departure_station }} - {{ $train->arrival_station }}</h3>
                <p>Orario di partenza: {{ $train->departure_time }}</p>
                <p>Orario di arrivo: {{ $train->arrival_time }}</p>
                <p>Treno {{ $train->company }} con {{ $train->carriages_number }} carrozze</p>
                @if($train->cancelled)
                <p>Ci dispiace ma il treno è stato cancellato :(</p>
                @elseif ($train->on_time)
                    <p>Il treno è in orario</p>
                @else 
                    <p>Il treno è in ritardo</p>
                @endif     
            </li>
        @endforeach
    </ul>
</body>

</html>