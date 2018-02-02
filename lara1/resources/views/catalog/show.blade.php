@extends('layouts.master')

@section('content')
    <?php
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $values= explode('/',$actual_link);
    ?>
    <div class="row" style="margin-top: 50px;">

        <div class="col-sm-4">

            <img src="{{ $arrayPeliculas['poster'] }}" style="max-width:100%" />

        </div>
        <div class="col-sm-8">

            <h1><b>{{ $arrayPeliculas['title'] }}</b></h1>
            <h2>Any: <b>{{ $arrayPeliculas['year'] }}</b></h2>
            <h3>Director: <b>{{ $arrayPeliculas['director'] }}</b></h3>

            <p>Sinopsi: {{ $arrayPeliculas['synopsis'] }}</p>
            <p>Estat:
                @if($arrayPeliculas['rented'])
                    <b>Llogada</b><br>
                    <button type="button" class="btn btn-danger">Tornar peli</button>
                @else
                    <b>Disponible</b><br>
                    <button type="button" class="btn btn-primary">Llogar peli</button>
                @endif
                <a class="btn btn-warning" href="{{ url('catalog/edit/'.$values[5])}}">
                    <span class="glyphicon glyphicon-edit"  aria-hidden="true"></span> Editar peli</a>
                <button type="button" class="btn btn-default" onclick="window.history.back()">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Tornar</button>

        </div>
    </div>

@stop
