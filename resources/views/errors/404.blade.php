@extends('layouts.layout', ['title' => '404 ошибка'])

@section('content')
    <div class="card">
        <h2 class="card-header">Ты зашел не в тот район дружище</h2>
        <img src="{{ asset('img/cats.jpg') }}" height="600" alt="cats">
    </div>

    <a href="/" class="btn btn-outline-primary">Вернуться на главную</a>
@endsection
