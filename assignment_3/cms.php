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
      display: flex; /* flexbox */
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
      height: 600px; /* fixed height */
      overflow: auto; /* produces scroll bars when the content is larger than the div */

    }
    </style>
  </head>
  <body>
    <!--Nav bar: href urls contain the content parameter which are used to access the other pages with php !-->
    <div class="navbar">
      <ul class="navlist">
        <li class="list-item"><a href="cms.php?content=1">Home</a></li>
        <li class="list-item"><a href="cms.php?content=2">UCC</a></li>
        <li class="list-item"><a href="cms.php?content=3">Personal</a></li>
        <li class="list-item"><a href="cms.php?content=4">Contact</a></li>

      </ul>
    </div>
    <div id="content_window"> <!-- all of the content is displayed in this window !-->
        <?php
          if (isset($_GET['content'])) { // check if the content parameter from the url is set
              switch ($_GET['content']) { // set the $content variable to the appropriate page depending on the value of the content parameter
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
                if (in_array($_GET['content'], [1,2,3,4])) { // check if content has a valid value
                  if (is_readable($content)) { // check if the file is readable
                    include $content; // if all checks pass, display the content file
                  } else {
                      echo "Error. Content file cannot be retrieved."; // if the file is not readable display error message
                    }
                } else { // if the parameter value is invalid display error message
                    echo "Invalid parameter. No such content.";
                  }
          } elseif (is_readable("home.txt")) {
              include "home.txt"; // if content parameter is not set display the homepage
            } else {
                echo "Error. Content file cannot be retrieved.";
              }

         ?>
    </div>
  </body>
</html>
