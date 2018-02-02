@extends('layouts.master')

@section('content')
    <div class="card" style="margin-top: 50px;">

        <div class="card-header text-center">
            <b><h1>Modificar película</h1></b>
        </div>

        <div class="card-form text-center" style="padding: 50px 270px;">
            <form action="" method="post">
                <b>
                    <label>Título</label> <br>
                    <input class="form-control" type="text" name="title" placeholder="{{ $arrayPeliculas['title'] }}"><br>
                    <label>Año</label><br>
                    <input class="form-control" type="text" name="year" placeholder="{{ $arrayPeliculas['year'] }}"><br>
                    <label>Director</label><br>
                    <input class="form-control" type="text" name="director" placeholder="{{ $arrayPeliculas['director'] }}"><br>
                    <label>Poster</label><br>
                    <input class="form-control" type="text" name="poster" placeholder="{{ $arrayPeliculas['poster'] }}"><br>
                    <label>Resumen</label><br>
                    <textarea class="form-control" name="synopsis" style="height: 150px;">{{ $arrayPeliculas['synopsis'] }}</textarea><br>
                </b>
                <button type="submit" class="btn btn-primary">Modificar película</button>
            </form>
        </div>
    </div>
@stop
