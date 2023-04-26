<?php

// initializing $userAge and day of the week from given age and day
  $userAge = $_POST['user-age'];
  $day = $_POST['day'];

// response for when user does not enter an age
if (empty($userAge)) {
      echo "Please enter your age.";
}

// response for when user does not enter a day of the week
elseif ($day == "") {
      echo "Please enter a day.";
}

// response for when user age is under 5 or greater than 95 (free)
elseif (($userAge < 5) || ($userAge > 95)) {
      echo "You get in for free! Thank you for using this tool!";
}

// response for a student discount: age is between 12 and 21 OR day is Tuesday or Thursday
elseif ((($userAge >= 12) && ($userAge <= 21))
|| (($day == "Tuesday") || ($day == "Thursday"))) {
      echo "You get a student discount! Thank you for using this tool!";
}

// response for when user age does not qualify for any discounts and it is not Tuesday or Thursday
else {
      echo "You must pay the regular price. Thank you for using this tool!";
}

