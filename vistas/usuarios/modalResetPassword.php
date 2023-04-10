<form id="frmActualizaPassword" onsubmit="return resetPassword()" method="POST">
    <!-- Modal -->
    <div class="modal fade" id="modalResetPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Resetear Clave</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="idUsuarioReset" id="idUsuarioReset" hidden>
                    <label for="">Ingrese la clave nueva</label>
                    <input type="text" 
                           name="passwordReset" 
                           id="passwordReset" 
                           class="form-control" 
                           required>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-warning" style="color: white;">Guardar Cambio</button>
                </div>
            </div>
        </div>
    </div>
</form>