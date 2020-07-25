@extends('plantilla')

@section('seccion')
    <h1>Estos son mis hermanos</h1>
    @foreach($equipo as $i)
        <a href="{{route('nosotros',$i)}}" class="h4 text-danger">{{$i}}</a><br>
    @endforeach

    @if(!empty($nombre))
        @switch($nombre)
            @case($nombre=='Ignacio')
                <h2 class= "mt-5">El nombre es {{$nombre}}</h2>
                <p>{{$nombre}} Lorem Ipsum es simplemente un texto ficticio de la industria de 
                    impresión y composición tipográfica. Lorem Ipsum ha sido el texto 
                    ficticio estándar de la industria desde el año 1500, cuando una impresora 
                    desconocida tomó una galera de tipo y la revolvió para hacer un 
                    libro de muestras</p>
                @break
            @case($nombre=='Abelardo')
                <h2 class= "mt-5">El nombre es {{$nombre}}</h2>
                <p>{{$nombre}} Lorem Ipsum es simplemente un texto ficticio de la industria de 
                    impresión y composición tipográfica. Lorem Ipsum ha sido el texto 
                    ficticio estándar de la industria desde el año 1500, cuando una impresora 
                    desconocida tomó una galera de tipo y la revolvió para hacer un 
                    libro de muestras</p>
                @break
            @case($nombre=='Pedro')
                <h2 class= "mt-5">El nombre es {{$nombre}}</h2>
                <p>{{$nombre}} Lorem Ipsum es simplemente un texto ficticio de la industria de 
                    impresión y composición tipográfica. Lorem Ipsum ha sido el texto 
                    ficticio estándar de la industria desde el año 1500, cuando una impresora 
                    desconocida tomó una galera de tipo y la revolvió para hacer un 
                    libro de muestras</p>
                @break
        @endswitch
    @endif
@endsection