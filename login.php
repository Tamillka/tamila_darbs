
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style_login.css">
    <title>Login</title>
</head>
<body>
    <div class="box-container">
    <div class="box">   
        <h2>Ielogoties sistēmā</h2>
        <div class="info">
        </div>
        <form method="POST">
        <input type="text" name="lietotajvards" placeholder="Lietotājvārds*" class="input" autocomplete="off" required>
         <input type="password" name="parole" placeholder="Parole*" class="input" autocomplete="off" required>
         <button class = "btn" name="ielogoties">IELOGOTIES</button> 
         <p>Neesi vēl reģistrēts? <a href="register.php"><span id="now">Reģistrēties</span></a></p>
</form>
        </div>
        <div class="box logo">
            <img src="images/logo.png">
            <p>Doties uz <a href="index.php"><span id="now">sākumlapu</span></a></p>
        </div>
    </div>
</body>
</html>