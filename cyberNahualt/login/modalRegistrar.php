<div class="modal fade" id="modalRegistrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="servidor/registrarUsuario.php" method="POST">         
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required pattern="[a-zA-Z]+" >

            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" required pattern="[a-zA-Z]+">
            
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required> 
                                    
            <label for="password">password</label>
            <input type="text" class="form-control" name="password" id="password" required> 
            <br>
            <hr>
            <button class="btn btn-lg btn-primary btn-block text-uppercase">Registrar</button>
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>