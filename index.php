<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CompILe @ ICC</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme-min.css" rel="stylesheet">
    <link href="css/custom/headerfooter.css" rel="stylesheet">
    <link href="css/custom/homepage.css" rel="stylesheet">

  </head>

  <body>
    <?php include("includes/header.html");?>

    <!--Can someone who does graphic design please find a better color for the jumbotron-->
    <div class="jumbotron mono text-center">
      <div class="logo">
        <img src="img/compile-logo.png" id="compile-logo-center">
      </div>
      <p class="h1">The ICC Information Technology Club</p>
    </div>

    <div class="container mono" id="column-right">
      <p class="h1 text-center">Projects</p>
      <p class="h3 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas egestas accumsan purus, quis porta purus commodo et. Integer aliquam tempus sem euismod placerat. Nulla a facilisis tellus. Integer commodo interdum posuere. Quisque lacinia magna odio, eu pellentesque lacus semper et.</p>
    </div>

    <!--The plan is to have a 2 column layout of information on our front page, which will collapse into a single column when the screen width is small enough.-->
    <div class="container mono content-main" id="about">
      <p class="h1 text-center">About</p>
      <p class="h3 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas egestas accumsan purus, quis porta purus commodo et. Integer aliquam tempus sem euismod placerat. Nulla a facilisis tellus. Integer commodo interdum posuere. Quisque lacinia magna odio, eu pellentesque lacus semper et. Praesent sit amet massa elit. Pellentesque sem risus, facilisis et scelerisque vel, posuere sit amet magna. Vestibulum eget ante massa. Quisque ullamcorper, leo vel pharetra dictum, mauris justo blandit risus, id viverra ipsum tellus quis orci. Nullam lobortis, sem non vestibulum malesuada, eros diam commodo mauris, vel faucibus eros nunc eu dui. Nulla lobortis eu felis vel dignissim. Morbi mattis justo volutpat nunc rhoncus euismod.</p>
    </div>

    <div class="container mono content-main" id="contact">
      <p class="h1 text-center">Contact</p>
      <p class="h3 text-center">Nullam consequat nibh vitae leo semper, ut sodales lacus condimentum. Curabitur et nibh nec nibh varius suscipit et eu ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris consectetur sapien quis pretium semper. Praesent varius felis a metus pretium, aliquet tempus nulla aliquet. Vestibulum vel dictum tellus, quis ultricies purus. Nam vitae dictum tortor, eget semper ipsum.</p>
    </div>

 <?php include("includes/footer.html");?>

    <!--Bootstrap stuff-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
