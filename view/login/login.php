<h1>Inloggen</h1>

    <div class="row">
        <form role="form" method="POST" action="<?= URL ?>login/loginAccount">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Verplicht veld</strong></div>
                <div class="form-group">
                    <label for="Gebruikersnaam">Gebruikersnaam</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="gebruikersnaam" name="gebruikersnaam"  placeholder="Enter username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pwd">Wachtwoord</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="wachtwoord" name="wachtwoord" placeholder="Enter password">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
    </div>