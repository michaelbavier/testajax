<?php  include_once "request.php"; ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC|Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="dist/mtr-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="dist/mtr-datepicker.default-theme.min.css">
  <title>My Todo List</title>
</head>
<body>



  <div class="container">
    <!--.....................navbar.....................-->
    <nav>
      <h1>MY TODO LIST</h1>
      <a href="#">
        <div id="add">
          <p>+</p>
        </div>
      </a>
    </nav>
    <div id="contenu1">
      <?php  foreach ($tasks as $tache): ?>
        <div class="next-container">
          <ul class="item">
            <li class="list-item">
              <div class="groupe">
                <!-- <div class="content"><span>7:30</span><span></span></div> -->
                <div class="title "><?php echo $tache["task_title"] ?></div>
                <div class="description "><?php echo $tache["task_description"] ?></div>
                <div class="start_timestamp "><?php echo $tache["task_start_timestamp"] ?></div>
                <div class="end_tiemestamp"><?php echo $tache["task_start_timestamp"] ?></div>
                <div class="ended_on_timestamps"><?php echo $tache["task_ended_on_timestamp"] ?></div>
              </div>
              <ul class="menu">
              <button type="button" name="delete">Delete</button>
              <button type="button" name="edite">Edite</button>
            </ul>
              <hr>
<!--

                <div class="info"></div>
                <ul class="menu-action"><span></span><span></span></ul></li>
              </li>
            </ul> -->
          </div>
        <?php endforeach ?>


        <!--........................Footer!...........................-->
        <footer class="item-footer">
          <a href="#" style="color: #A0A2A1;"><span>Show:All Task</span></a>
          <a href="#" style="color:#A0A2A1;"><span>Todo Task</span></a>
          <a href="#" style="color:#A0A2A1;"><span>Done Task</span></a>
        </footer>
      </div>
      <!--........................Page2....................-->


      <!--...................Main-Conatiner.........................-->
      <div id="contenu2">
        <form id="form" action="request.php" method="POST">
          <div class="maintwo">
            <div class="main-container">
              <ul class="list" id="todo">
                <li class="list-item-try">

                  <label for="title">
                    <p>Title : <input type="text" name="title"></p><hr>
                  </label>
                  <label for="description">
                    <p>Description : <textarea name="description" rows="8" cols="60"></textarea></p><hr>
                  </label>
                  <label for="start at">
                    <p>Start At : <input type="text" name="start_at"></p><hr>
                  </label>
                  <label for="end at">
                    <p>End At : <input type="text" name="end_at"></p><hr>
                  </label>
                </div>
                <!--....................list-Item-Second..............................-->

                <div id="first-mtr-datepicker"></div>
                <!--........................Footer!...........................-->
                <footer class="item-footer">
                  <button id="addTask" type="submit" name="addTask">Add Task</button>
                  <!-- <button id="newtache"type="button" name="newtache"></button> -->
                </footer>
              </div>
            </form>

          </div>
        </div>


        <!--....................Script....................-->

        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="dist/mtr-datepicker.min.js"></script>


        <script>
        var config = {
          target: 'first-mtr-datepicker'
        };
        var myDatepicker = new MtrDatepicker(config);
        </script>
      </body>

      </html>
