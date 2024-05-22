<div class="modal fade" id="modal_eliminar_{{$teacher->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmación de eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('teacher.destroy',$teacher->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p>
                        ¿Está seguro que desea eliminar el profesor con Id: {{ $teacher->id }}?
                    </p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>
