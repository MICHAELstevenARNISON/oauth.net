<?php
$page_section = "home";
$page_title = "OAuth Community Site";

require('./includes/_header.php');
?>

<div class="container">
  <div id="header" class="column first last span-20">
    <div id="site-description" class="column span-18 append-1 prepend-1 first last">
      <h3>An <strong>open protocol</strong> to allow <strong>secure authorization </strong> in a <strong>simple</strong> and <strong>standard</strong> method from web, mobile and desktop applications.</h3>
      <p id="read-more">
        <a href="/2/">Learn more about OAuth 2.0 &raquo;</a>
      </p>
    </div>
  </div>

  <div class="column first last span-20" style="clear: both; text-align: center; margin: 20px auto; float: none;">
    <div style="padding: 20px 0; display: flex; flex-direction: row;">
      <div style="flex: 1 1; font-size: 16pt; line-height: 23pt;">
        The OAuth 2.0 authorization framework enables third-party
        applications to obtain limited access to a web service.
      </div>
      <?php if(file_exists(__DIR__.'/.supporter.php')) { include(__DIR__.'/.supporter.php'); } ?>
    </div>
  </div>

  <div class="row">

    <div id="client-side" class="col-md-6">
      <h5>For app developers...</h5>
      <p>
        If you're building...
      </p>
      <ul>
        <li>web applications</li>
        <li>desktop applications</li>
        <li>mobile applications</li>
        <li>JavaScript or browser-based apps</li>
      </ul>
      <p>
        OAuth is a simple way to publish and interact with protected data. It's also a safer and more secure way for people to give you access. We've kept it simple to save you time.
      </p>
    </div>

    <div id="server-side" class="col-md-6">
      <h5>For API developers...</h5>
      <p>
        If you're supporting...
      </p>
      <ul>
        <li>web applications</li>
        <li>mobile applications</li>
        <li>server-side APIs</li>
        <li>mashups</li>
      </ul>
      <p>
        If you're storing protected data on your users' behalf, they shouldn't be spreading their passwords around the web to get access to it. Use OAuth to give your users access to their data while protecting their account credentials.
      </p>
    </div>

    <div class="clear"></div>

    <a href="/getting-started/">Get started...</a>

    <div class="clear"></div>

  </div>
</div>

<?php require('./includes/_footer.php'); ?>
