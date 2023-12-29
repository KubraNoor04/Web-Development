<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $firstnumber = 45;
  $secondnumber = 30;
  $thirdnumber = 29;
  if ($firstnumber > $secondnumber && $firstnumber > $thirdnumber) {
    echo "first number is greater" . $firstnumber;
  } elseif ($secondnumber > $firstnumber && $secondnumber > $thirdnumber) {
    echo "second number is greater";
  } else {
    echo "third number is greater";
  }
  ?>
</body>

</html>