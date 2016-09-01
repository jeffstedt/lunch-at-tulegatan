// ########## Ajax Load ##########
function auto_load() {
    $.ajax({
        url: "main-function.php",
        cache: false,
        success: function (data) {
          console.log('Ajax Loop Runned')
            $(".ajax").html(data);
        }
    });
}

$(document).ready(function () {

    auto_load(); //Call auto_load() function when DOM is Ready

    //Refresh auto_load() function after 5000 milliseconds
    setInterval(auto_load, 5000);
    // ########## END OF STAGE 1 ##########

});






function updateClock ( )
 	{
 	var currentTime = new Date ( );
  	var currentHours = currentTime.getHours ( );
  	var currentMinutes = currentTime.getMinutes ( );
  	var currentSeconds = currentTime.getSeconds ( );

  	// Pad the minutes and seconds with leading zeros, if required
  	currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  	currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  	// Choose either "AM" or "PM" as appropriate
  	var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  	// Convert the hours component to 12-hour format if needed
  	currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  	// Convert an hours component of "0" to "12"
  	currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  	// Compose the string for display
  	var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;


   	$(".clock").html(currentTimeString);

 }

$(document).ready(function()
{
   setInterval('updateClock()', 1000);
});
