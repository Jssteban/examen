<div class="modal fade" id="modal_editar_{{$teacher->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar profesor con Id: {{$teacher->id}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('teacher.update',$teacher->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="dni" class="form-label">Dni</label>
                        <input type="text" class="form-control" id="dni" name="dni" value="{{$teacher->dni}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$teacher->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Número de teléfono</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$teacher->phone_number}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$teacher->address}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>
