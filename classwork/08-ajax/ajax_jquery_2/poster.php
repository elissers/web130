<?php
  $data = $_POST["data"];
  if($data == "")
  {
    echo "Enter something";
  }
  else if($data == 1)
  {
    echo "1 for the Money";
  }
  else if($data == 2)
  {
    echo "2 for the Show";
  }
  else if($data == 3)
  {
    echo "3 to Get Ready";
  }
  else
  {
    echo "Sorry I got lazy and didn't want to make a message about this number";
  }
?>