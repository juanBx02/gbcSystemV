<?php 
    include('./view/header.html');
?>

<div class="container-fluid p-4">
    
    <div class="container-fluid mb-3">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">agregar Usuario</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card -->
    <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre Completo</th>
                      <th>Correo Electronico</th>
                      <th>Direccion</th>
                      <th>Rol</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1000540501</td>
                      <td>Juan Benitez</td>
                      <td>jbjuanbenitezz@gmail.com</td>
                      <td>Cr 33 #43-51</td>
                      <td>Administrador</td>
                      <td>
                          <div class="btn-group">
                              <a class="btn btn-info" href="">Editar</a>
                              <a class="btn btn-success" href=""><i class="fa fa-lock"></i></a>
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>10006857680</td>
                      <td>Daniela ochoa</td>
                      <td>danielas8ao@gmail.com</td>
                      <td>Cr 10 #51-54</td>
                      <td>Administrador</td>
                      <td>
                          <div class="btn-group">
                              <a class="btn btn-info" href="">Editar</a>
                              <a class="btn btn-success" href=""><i class="fa fa-lock"></i></a>
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>10006857680</td>
                      <td>Daniela ochoa</td>
                      <td>danielas8ao@gmail.com</td>
                      <td>Cr 10 #51-54</td>
                      <td>Administrador</td>
                      <td>
                          <div class="btn-group">
                              <a class="btn btn-info" href="">Editar</a>
                              <a class="btn btn-success" href=""><i class="fa fa-lock"></i></a>
                          </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>

<?php 
    include('./view/footer.html');
?>