{{-- Estructuras de control de Blade --}}
@extends('plantilla')

@section('section-name')
    {{-- foreach para recorrer arreglos --}}
    @foreach ($equipo as $item)
        {{-- Ruta con parámetros desde blade --}}
        <a href="{{ route('nosotros', $item) }}" class="h4 text-success">{{ $item }}</a><br>
    @endforeach

    @if (!empty($member))
        @switch($member)
            @case($member == 'Samuel Gómez Balderas')
                @include('member-info-templete')
                @break

            @case($member == 'Cristhian Enrique Olivares Lara')
                @include('member-info-templete')
                @break

            @case($member == 'Josué Idahir Cruz Cortez')
                @include('member-info-templete')
                @break

            @case($member == 'Erick Ricardo García García')
                @include('member-info-templete')
                @break

            @default
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, illo!</p>
                
        @endswitch
    @endif
@endsection