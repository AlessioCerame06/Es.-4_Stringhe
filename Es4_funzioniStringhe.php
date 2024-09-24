<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRINGHE</title>
</head>
    <body>
        
    </body>
</html>

<?php
    $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla bibendum augue, vel aliquam eros efficitur in. 
    Maecenas congue imperdiet aliquet. Quisque volutpat lectus vel libero semper, sit amet auctor urna tempus. 
    Curabitur interdum ligula id sapien pellentesque, sit amet tempor lorem vehicula. 
    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
    Phasellus tortor ante, dignissim nec arcu nec, elementum maximus justo. Duis volutpat lacus ipsum, at fermentum sapien feugiat commodo. 
    Cras bibendum lacinia mauris non vestibulum. Praesent justo nulla, pulvinar eget nulla nec, luctus suscipit nulla. 
    Vivamus tristique sed tortor a tincidunt. Mauris elementum porta augue, mattis molestie leo vehicula eu. 
    Sed faucibus lacus non leo viverra elementum.";

    echo "<p style='color: green'>$str</p>";

    $strMaiuscola = strtoupper($str);

    echo "<p style='color: blue'>$strMaiuscola</p>";

    $nCaratteri = strlen($str);

    echo "<span style='color: red'>Numero dei caratteri: $nCaratteri</span><br>";

    $nParole = str_word_count($str);

    echo "<span style='color: yellow; background-color: black'>Numero delle parole: $nParole</span>";
?>