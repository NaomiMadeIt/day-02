<?php
  //hide "notices" because they are not really errors
  error_reporting( E_ALL & ~E_NOTICE );

  //begin form parser
  //extract the data
  $namae =          $_POST['namae'];
  $sai =            $_POST['sai'];
  $did_submit =     $_POST['did_submit'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GET method example</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Thanks for taking my survey!</h1>
    <p>Answer these questions, please.</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="namae" >O namae wa?</label>
      <input type="text" name="namae" value="namae" id="namae" />

      <label for="sai">Nan sai desuka?</label>
      <input type="text" name="sai" value="00" id="sai"/ />

      <input type="submit" value="Submit!" />

      <input type="hidden" name="did_submit" value="true" />
    </form>

    <?php
      if( $did_submit ){
        if( $namae != '' and $sai != '' ) {
          //display the values from the form
          echo 'Anata no namae wa ';
          echo $namae;
          echo ' desu. ';
          echo 'Anata no ';
          echo $sai;
          echo ' sai desu.';
        }else{
          echo 'Please fill in both fields.';
        }
      }
    ?>

  </body>
</html>
