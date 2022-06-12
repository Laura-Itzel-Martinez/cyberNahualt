<div class="modal fade" id="modalAgregarPersona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="servidor/loginProcesar.php" method="POST">
        <div class="input-group form-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
              <input type="text" class="form-control" placeholder="email" name="email" id="email">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="password" name="password" id="password">
            </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit" >Entrar</button>
      </form>
      <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit" data-toggle="modal" data-target="#modalRegistrar">Registrar</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>