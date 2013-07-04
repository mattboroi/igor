<?php
  require 'tropo.class.php';

  $file = fopen("status.txt", "r") or exit("Unable to open file!");
  $status = fgets($file);
  fclose($file);

  $tropo = new Tropo();
  if ($status == "on")
    {
      $tropo->say("Sorry but Master isn\'t on WiFi, I\'m sure he will get back to you soon -Igor");
      $tropo->RenderJson();
    }
  else
    {
    }
?>
