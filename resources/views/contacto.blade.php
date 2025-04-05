@extends('layouts.app')

@section('page-title', 'Contacto')

@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información de Contacto</h5>
            <p class="card-text">Puedes contactarnos a través de los siguientes medios:</p>
            
            <ul class="list-group">
                <li class="list-group-item">
                    <i class="fas fa-envelope mr-2"></i> contacto@ejemplo.com
                </li>
                <li class="list-group-item">
                    <i class="fas fa-phone mr-2"></i> 555-1234
                </li>
                <li class="list-group-item">
                    <i class="fas fa-map-marker-alt mr-2"></i> Calle Falsa 123
                </li>
            </ul>
        </div>
    </div>
@stop