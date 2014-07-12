<div class="container">
    <div class="row">
        <?php 
if(!$login_successful){
   echo '<h1>Invalid login</h1>';
}?>
        </div>
    <div class="row">
        <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <form class="form-horizontal" action="<?php echo URL; ?>login/verify" method="post">
  <fieldset>
    <legend>Login</legend>
    <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="Username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
        
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="submit" class="btn btn-primary" value="Submit"/>
      </div>
    </div>
  </fieldset>
</form>
</div>
        <div class="col-lg-3"></div>
</div>
    </div>