@extends('layouts.master')

@section('content')


    <h1>Publicar um post!</h1>
    <hr>
    <form style="float: left; width:700px; margin-bottom: 5%;" method="POST" action="/posts">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titulo do post">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Publicar</button>


    </form>

    @include('layouts.errors')

@endsection