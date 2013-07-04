<html>
  <head>
    <title>Igor</title>
  </head>
  <body>
    <?php
      $file = fopen("status.txt", "r+") or exit("Unable to open file!");
      if ($_POST["status"] == "on" or $_POST["status"] == "off")
        {
          ftruncate($file, 0); // Prevents saving 'onf' to file
          fwrite($file, $_POST["status"]); 
          echo "<p>" . "Igor is currently " . $_POST["status"] . "</p>";
        }
      else
        {
          echo "<p>" . "Igor is currently " . fgets($file) . "</p>";
        }
      fclose($file);
    ?>
    <a href="index.html">Home</a>
  </body>
</html>
