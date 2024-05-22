<x-html>
    <div class="p-5 mx-auto">
        <button class="btn btn-info mb-5" data-bs-toggle="modal" data-bs-target="#modal_registrar">registrar profesor</button>
        @include('teacher.create')
        <table class="table  table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">dni</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <th scope="row">{{$teacher->id}}</th>
                        <th scope="row">{{$teacher->dni}}</th>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->phone_number}}</td>
                        <td>{{$teacher->address}}</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal_editar_{{$teacher->id}}">Editar</button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal_eliminar_{{$teacher->id}}">Eliminar</button>
                        </td>
                    </tr>
                    @include('teacher.edit')
                    @include('teacher.delete')
                @endforeach
            </tbody>
        </table>
    </div>
</x-html>
