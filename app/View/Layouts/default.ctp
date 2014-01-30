<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/cakephp/app/webroot/css/foundation.css" />
    <script src="/cakephp/app/webroot/js/modernizr.js"></script>
    <?php echo $this->Html->charset(); ?>
    <title>
     E-shop
   </title>
  </head>
  <body>
  <style type="text/css">
    body{background-color:#372F25;}
  </style>
  <div id="container">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1>
            <b><a href="#">ShoepaShop</a></b>
          </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
      </ul>
      <section class="top-bar-section">
        <ul class="right">
          <li class="has-form">
            <div class="row collapse">
              <div class="large-8 small-9 columns">
                <input type="text" placeholder="Find Stuff">
              </div>
              <div class="large-4 small-3 columns">
                <a href="#" class="alert button expand">Search</a>
              </div>
            </div>
          </li>
          <li class="divider"></li>
          <li class="has-dropdown">
            <a href="#">Main Item 3</a>
            <ul class="dropdown">
              <li><a href="#">Dropdown Option</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li class="divider"></li>
              <li><a href="#">See all →</a></li>
            </ul>
          </li>
          <li class="divider"></li>
          <li><a href="#">Panier</a></li>
        </ul>
      </section>
    </nav>
    </div>				
    <div id="content">
      <?php echo $this->Session->flash(); ?>
      <?php echo $this->fetch('content'); ?>
    </div>
    </div>
    <script src="/cakephp/app/webroot/js/jquery.js"></script>
    <script src="/cakephp/app/webroot/js/foundation.min.js"></script>
    <script>
     $(document).foundation();
    </script>
  </body>
</html>