<?php
require 'includes/layouts/main-header.php';
?>

<div class="login-container">
  <div class="login-card">

    <h4>Register.</h4>
    <p>This where you make an account.</p>

    <form class="" action="#" method="post">

      <label>
        <input class="input" type="text" name="username" value="" placeholder="Username">
      </label>

      <label>
        <input class="input" type="text" name="email" value="" placeholder="Email">
      </label>

      <label>
        <input class="input" type="password" name="" value="" placeholder="Password">
      </label>

      <label>
        <input class="input" type="password" name="" value="" placeholder="Repeat password">
      </label>

      <p>Already have an account? <a href="login">Login</a>.</p>

      <button class="btn blue" type="button" name="button"><b>Register.</b></button>

    </form>

  </div>
</div>

<?php
require 'includes/layouts/footer.php';
?>
