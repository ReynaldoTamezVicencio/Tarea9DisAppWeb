@extends('adminlte::page')

@section('title', 'Panel Admin | @yield("page-title")')

@section('content_header')
    <h1>@yield('page-title')</h1>
@stop

@section('content')
    @yield('main-content')
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Versión</b> 1.0.0
    </div>
    <strong>Actividad realizada por [Tu Nombre] - Menús con Laravel Blade - {{ date('Y') }}</strong>
@stop