<!-- notice modal -->
<div class="modal fade" id="modal_vacunar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>FORMULARIO DE VACUNAS MÉDICAS </h6>
            </div>
            <div class="modal-body">
                @include('consultas_medicas.vacunar')
            </div>
            <div class="modal-footer text-center">
                <a href="#" id="update_vacuna" class="btn btn-primary pull-right">Guardar</a>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->