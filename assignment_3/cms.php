<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
    <style>
    body {
      background-image: radial-gradient(#FFFFFF, #554971);
      margin: auto;
    }
    table, th, td {
      border: 2px solid #8AC6D0;
      text-align: center;
    }
    th, td {
      padding: 10px;
    }
    table {
      width: 80%;
      margin: auto;
    }

    .navbar {
      display: flex;
      justify-content: space-around;
      align-items: center;
      font-size: 20px;
      width: 100%;
      background-image: radial-gradient(#FFFFFF, #B8F3FF);
    }
    .logo {
      height: 100px;
      float: left;
      margin: 10px;
    }
    .navlist {
      list-style: none;

    }
    .navbar a {
      color: #36213E;
      text-decoration: none;
    }
    .navbar .list-item {
      display: inline-block;
      padding: 0px 20px 0px 20px;
    }
    #cork, #sheeps_head {
      width: 80%;
      margin: 10px;
    }
    #content_window {
      margin: 50px 150px 50px 150px;
      height: 600px;
      overflow: auto;

    }
    </style>
  </head>
  <body>

    <div class="navbar">
      <ul class="navlist">
        <li class="list-item"><a href="cms.php?content=1">Home</a></li>
        <li class="list-item"><a href="cms.php?content=2">UCC</a></li>
        <li class="list-item"><a href="cms.php?content=3">Personal</a></li>
        <li class="list-item"><a href="cms.php?content=4">Contact</a></li>

      </ul>
    </div>
    <div id="content_window"> <!--  is_readable() for content not available !-->
        <?php
          if (isset($_GET['content'])) {
              switch ($_GET['content']) {
                case 1:
                  $content = "home.txt";
                  break;
                case 2:
                  $content = "ucc.txt";
                  break;
                case 3:
                  $content = "personal.txt";
                  break;
                case 4:
                  $content = "contact.txt";
                  break;
                }
                if (in_array($_GET['content'], [1,2,3,4])) {
                  if (is_readable($content)) {
                    include $content;
                  } else {
                      echo "Error. Content file cannot be retrieved.";
                    }
                } else {
                    echo "Invalid parameter. No such content.";
                  }
          } elseif (is_readable("home.txt")) {
              include "home.txt";
            } else {
                echo "Error. Content file cannot be retrieved.";
              }

         ?>
    </div>
  </body>
</html>
