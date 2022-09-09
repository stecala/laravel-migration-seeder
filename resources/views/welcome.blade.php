<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <ul>
            @forelse ($trains as $train)
                <li>
                    {{ $train -> Azienda }}
                    <ol>
                        <li>
                            Partenza: {{ $train -> SP}}
                        </li>
                        <li>
                            Arrivo: {{ $train -> SA}}
                        </li>
                        <li>
                            Ritardo: @if ($train->Ritardo == 0)NO @else SI
                                    @endif
                        </li>
                        <li>
                            Cancellato: @if ($train->Cancellato == 0)NO @else SI
                                    @endif
                        </li>
                    </ol>
                </li>
            @empty
                <h1>
                    🛑🚂
                </h1>
            @endforelse
        </ul>
    </body>
</html>
