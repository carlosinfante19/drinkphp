<?php

if ( isset ($_POST['edad']) and !empty ($_POST['edad']) ){

    echo "Your age is ".$_POST['edad'];
    $edad= $_POST['edad'];

    if ($edad>=18) {
      echo "you´r old enoght to drink";
    } else {
      echo " sorry you´r a kid, so fuck off!!";
    }
}

?>

<form class="" action="index.php" method="post">
    <input type="text" name="edad" placeholder="Summit your age">
    <input type="submit" value="send">
</form>
