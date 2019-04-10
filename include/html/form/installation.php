<div class="row">
  <div class="col-md-4 col-md-offset-4">

    <form id="install_form" method="POST" class="panel panel-default">

      <div class="panel-heading">
        <h3 class="panel-title">Installation</h3>
      </div>

      <div class="panel-body">
        <div class="form-group">
          <label for="admin_username">Identifiant de l'administrateur :</label>
          <input type="text" id="admin_username" name="admin_username" class="form-control" autofocus/>
        </div>

        <br /><br />

        <div class="form-group">
          <label for="admin_pass">Mot de passe de l'administrateur:</label>
          <input type="password" id="admin_pass" name="admin_pass" class="form-control" />
        </div>

        <div class="form-group">
          <label for="repeat_admin_pass">Répéter le mot de passe de l'administrateur:</label>
          <input type="password" id="repeat_admin_pass" name="repeat_admin_pass" class="form-control" />
        </div>

        <br /><br />

        <input id="install" name="install" type="submit" value="Installer" class="btn btn-default" />
      </div>

    </form>

  </div>
</div>
