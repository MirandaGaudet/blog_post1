<?php
  // In this example, important values are stored in plaintext.
  // Don't do this in live production! Instead, these values are
  // usually stored as environmental variables some place safe.
  $dbname = "test_app";
  $dbuser = "%";
  $dbpass = "Mirandagracegaudet123$";

  //opens a new mysqli connection (the preferred method today)
  $mysqli = new mysqli("%", $dbuser, $dbpass, $dbname);

  /* check connection */
  if ($mysqli->connect_errno) {
      printf("<p class=\"error\">Connect failed: %s</p>", $mysqli->connect_error);
      exit();
  }
  else {
    echo "<p class=\"success\">You're connected to the " . $dbname . " database. Have a nice day 😃</p>";
  }
?>
