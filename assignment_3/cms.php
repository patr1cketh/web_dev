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
      position: fixed;
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
    #home, #class_timetable, #lab_timetable, #home_photo, #other_photo {
      padding-top: 50px;
    }
    #cork, #sheeps_head {
      width: 80%;
      margin: 10px;

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
    <div id="home">
        <h2>Hello</h2>
        <?php
          echo $_GET['content'];

         ?>
        <p></p>
      </div>
    <div id="class_timetable">

    <div id="lab_timetable">

      </div>
    <div id="home_photo">


      </div>
    <div id="other_photo">

      </div>
  </body>
</html>
