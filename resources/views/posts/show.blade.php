@extends('layout')
@section('content')
    <div>
<!-- por crée un new controlleur il est utlisier la commande php artisan make:Controller HomeController -->
        <h1>c'set la page SHOW</h1>
        <h2> Title : {{$data['title']}}</h2>
</div>
@endsection