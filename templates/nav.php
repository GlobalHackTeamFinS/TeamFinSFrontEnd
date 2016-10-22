<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand <?php echo ($_SERVER['PHP_SELF'] == '/index.html' ? ' active' : '');?>" href="index.html">Shelter Helper</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/index.html' ? ' active' : '');?>" href="index.html">Dashboard</a></li>
        <li><a href="#">Settings</a></li>
        <li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/shelter-profile.html' ? ' active' : '');?>" href="shelter-profile.html">Shelter Profile</a></li>
        <li><a href="#">Help</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </div>
  </div>
</nav>