<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>När är det lunch?</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>När är det lunch?</h1>

    <div class="ajax">
    <?php

    // SET TIMEZONE
    date_default_timezone_set('Europe/Stockholm');
    // SAVE WEEKDAY AND CLOCK IN VARIABLES
    $weekday = date("w");
    $clock = date('H:i');
    $clock=date('H:i', strtotime($clock));;

    echo "the clock is: <b>";
    echo($clock);
    echo "</b><br>";

    echo "current weekday: <b>";
    echo($weekday);
    echo "</b><br>";

    $currentDate = date('Y/m/d');
    $currentDate = date('Y/m/d', strtotime($currentDate));;


        //DATE INTERVAL FOR COUNTDOWN
        $timerStart = "09:00:00";
        $timerEnd   = "14:00:00";

        // DATE INTERVAL FOR LUNCH
        $lunchStart = "11:30:00";
        $lunchEnd   = "14:00:00";

      echo "Countdown target : <b>" . $currentDate . " " . $lunchEnd . "</b>";
      echo "<br>";

          // If weekday is between 1 and 6 display COUNTDOWN
    	if ($weekday > 0 && $weekday < 6) {

              // If clock it between $timerStart and $timer display Google Api
          if  ( ($clock > $timerStart) && ($clock < $timerEnd) ) {
              echo "<br> Show COUNTDOWN<br>";
              echo '<div id="clock"></div>';

              // If clock is between $lunchStart and $lunchEnd disyplay Google Api
              if ( ($clock > $lunchStart) && ($clock < $lunchEnd) )
                echo "<br> Show GOOGLE API";

           }


      // If not a weekday, display dont do anything abow
    	} else {
        echo "det är helg!";
    	}


     ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.countdown.min.js"></script>

    <script type="text/javascript">
      $('#clock').countdown('<?php echo $currentDate . " " . $lunchStart; ?>', function(event) {
      var $this = $(this).html(event.strftime(''
      + '<span>%d</span> days '
      + '<span>%H</span> hr '
      + '<span>%M</span> min '
      + '<span>%S</span> sec'));
    });
    </script>
    </div> <!-- end of AJAX -->
  </body>
</html>
