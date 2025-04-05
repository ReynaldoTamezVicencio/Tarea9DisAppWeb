@extends('layouts.app')

@section('page-title', 'Galería de Fotos')

@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nuestra Galería</h5>
            <p class="card-text">Aquí puedes ver nuestras mejores imágenes.</p>
            
            <div class="row">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/300" class="img-fluid mb-2" alt="Foto 1">
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/300" class="img-fluid mb-2" alt="Foto 2">
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/300" class="img-fluid mb-2" alt="Foto 3">
                </div>
            </div>
        </div>
    </div>
@stop