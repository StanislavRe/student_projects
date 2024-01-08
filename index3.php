<DOCTYPE html>
    <html>
        <head>



<p></p><b>Witaj</b></p>
</head>
<body>
    
<form method="post" action="index3.php">
    <p>waga</p>
    <input type = "number" name ="waga" >
    <p></p>
    <input type = "submit" value = "wyślij">
    <p></p>
    <input type = "text" name = "hd" value = "Twoja waga wynosi:<?php echo $_POST["waga"]; ?>">
</form> 














</body>
        </html>