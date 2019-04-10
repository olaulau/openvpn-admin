<div class="row">
  <div class="col-md-4 col-md-offset-4">

    <form id="configuration_form" method="POST" class="panel panel-default">

      <div class="panel-heading">
        <h3 class="panel-title">Récupérer les fichiers de configuration</h3>
      </div>

      <div class="panel-body">
        <div class="form-group">
          <label for="configuration_username">Identifiant</label>
          <input type="text" id="configuration_username" name="configuration_username" class="form-control" autofocus/>
        </div>

        <div class="form-group">
          <label for="configuration_pass">Mot de passe</label>
          <input type="password" id="configuration_pass" name="configuration_pass" class="form-control" />
        </div>

        <div class="form-group">
          <label for="configuration_os">OS</label>
          <select name="configuration_os" id="configuration_os" class="form-control">
            <option value="gnu_linux">GNU/Linux</option>
            <option value="osx_viscosity">OSX/Viscosity</option>
            <option value="windows">Windows</option>
          </select>
        </div>

        <input id="configuration_get" name="configuration_get" type="submit" value="Télécharger" class="btn btn-default" />
      </div>

    </form>

  </div>
</div>
