<?php
//questa è una variabile
$string = 'Ciao sono Michele';
$censured = $_GET['badword'];
$partial_string = substr ( $censured , 0 , 3 );
$sub_censured = '***';
$final_sentence = str_replace ($partial_string, $sub_censured, $string);
$plength = strlen ($string);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p> <?php echo $string ?> </p>
        <p> <?php echo $censured ?> </p>
        <p> <?php echo $partial_string ?> </p>
        <p> <?php echo $final_sentence ?> </p>
        <p> <?php echo $plength ?> </p>
    </body>
</html>
