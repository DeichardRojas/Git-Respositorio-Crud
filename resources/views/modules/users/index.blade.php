@extends('layouts/main')

@section ('contenido')
    <div class="container mt-4">
        <h2 class="mt-4 text-white">Registrar</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('create')}}" class="btn btn-primary">
                            <i class="fa-solid fa-plus"></i> Agregar
                        </a>
                        <hr>
                        <table class="table table-sm table-bordered text-center">
                            <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>         
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><form action="" method="post">
                                        <a href="{{route('show', $item->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i>Ver</a>
                                        <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Borrar</button>
                                    </form></td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Sin datos</td>
                                </tr>
                                    
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {{$items->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection