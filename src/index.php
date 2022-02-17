<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moxie 2.0</title>
  <link rel="stylesheet" href="../build/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
</head>

<body>
  <div class="titlebar">
    <!-- top titlebar -->
    <ul class="flex">
      <li>Battlemaster</li>
      <li>Wiki</li>
      <li>Forums</li>
      <li>Bugtracker</li>
      <li>&nbsp;</li><!-- blank li for ending rivet -->
    </ul>
  </div>
  <div class="grid grid-cols-2 gap-4">
    <div class="sidebar">
      <!-- side menubar -->
      <div class="menu">
        <ul>
          <li>Messages</li>
          <li>Information</li>
          <li>Politics</li>
          <li>Travel</li>
          <li>Actions</li>
          <li>Orders</li>
          <li>Command</li>
        </ul>
      </div>
      <div class="panel">
        <!-- menu panel -->
        <a href="#"><img src="../src/parts/img/bm-menu-top.png" alt="menu panel"></a>
      </div>
      <div class="globe">
        <!-- day/night globe -->
        <a href="#"><img src="../src/parts/img/bm-menu-bottom-day.png" alt="globe day"></a>
      </div>
    </div>
    <div class="content">
      <!-- main page content -->
      <div class="message">
        <p>Testing</p>
      </div>
    </div>
  </div>
</body>

</html>