
<?php

// SET TIMEZONE
date_default_timezone_set('Europe/Stockholm');
// SAVE WEEKDAY AND CLOCK IN VARIABLES
$weekday = date("w");
$clock = date('H:i:s');
$clock=date('H:i:s', strtotime($clock));;
?>

<?php
echo "the clock is: ";
//echo($clock);
//echo "</b><br>";
?>
<b><span class="clock"></span></b> <br>
<?php
echo "current weekday: <b>";
echo($weekday);
echo "</b><br>";

$currentDate = date('Y/m/d');
$currentDate = date('Y/m/d', strtotime($currentDate));;


    //DATE INTERVAL FOR COUNTDOWN
    $timerStart = "09:00:00";
    $timerEnd   = "16:00:00";

    // DATE INTERVAL FOR LUNCH
    $lunchStart = "15:30:00";
    $lunchEnd   = "16:00:00";

  echo "Countdown target: <b>" . $currentDate . " " . $lunchStart . "</b>";
  echo "<br>";

      // If weekday is between 1 and 6 display COUNTDOWN
  if ($weekday > 0 && $weekday < 6) {

          // If clock it between $timerStart and $timer display Google Api
      if  ( ($clock > $timerStart) && ($clock < $timerEnd) ) {
          echo "<br>Lunch in: <br>";
          echo '<div id="clock"></div>';
          //Needs to be float left
          echo '<div class="spinner spinner-1">' . '</div>';



          // If clock is between $lunchStart and $lunchEnd disyplay Google Api
          if ( ($clock > $lunchStart) && ($clock < $lunchEnd) )
            echo "<br> Show GOOGLE API";

       }


  // If not a weekday, display dont do anything abow
  } else {
    echo "det är helg!";
  }


 ?>
