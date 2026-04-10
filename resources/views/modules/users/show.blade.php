@extends('layouts/main')

<div class="container mt-4">
    <h2 class=text-white>Vista del usuario {{$item->name}}</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('index')}}" class="btn btn-secondary mt-4"> <i class="fa-solid fa-arrow-left"></i>Volver</a>
                </div>
             </div>

        </div>
    </div>
</div>

21321412421412