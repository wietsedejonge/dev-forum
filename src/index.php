<?php
require 'includes/layouts/main-header.php';
?>

<section class="container">
  <div class="sidebar">
    <div class="sidebar-card">

      <h5>Trending topics -</h5>
        <ul>
          <li>
            <a href="#">Front-end</a>
          </li>
          <li>
            <a href="#">Back-end</a>
          </li>
        </ul>
    </div>

    <div class="sidebar-card">
      <h5>All topics -</h5>
        <ul>

          <li>
            <a href="#">Front-end</a>
          </li>
            <li>
              <a href="#">Back-end</a>
            </li>
            <li>
              <a href="#">JavaScript</a>
            </li>
            <li>
              <a href="#">PHP</a>
            </li>
            <li>
              <a href="#">C++</a>
            </li>
          </ul>

        </div>
      </div>

      <div class="thread-container">
        <?php
        for ($i=0; $i < 2; $i++) {
          echo '
        <div class="thread-card">

          <h4>thread Title.</h4>
          <p><b>@threaduser <i class="bi bi-patch-check-fill"></i></b> - 20-04-2020 16:20.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <br>

          <a class="btn" href="#"><b>Read thread.</b></a>

          <br>

        </div>
        ';
      }
        ?>
      </div>

    </section>

<?php
require 'includes/layouts/footer.php';
?>
