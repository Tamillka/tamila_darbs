<?php
$page = "grozs";
require "header.php";
?>
<script src="../assets/grozs.js" defer></script>
<div class="cart">
    <h3><i class="fa-solid fa-bag-shopping"></i> Mans grozs</h3>
    <p><em></em></p>
</div>
<div class="colorful-divider"></div>
<div class="main-container">
    <div class="grozs-container animate" id="precesGroza-container">
    </div>

    <div class="total-box">
        <h3>Kopā:</h3>
        <div class="colorful-divider"></div>
        <p class="total"></p>
        <a class="btn" href="./pasutijums.php">Noformēt pasūtījumu</a>
    </div>
</div>

<div id="notifikacija" class="notifikacija hidden">
    <div class="closeNotif">
        <i class="fas fa-times"></i>
    </div>
    <span id="notifikacijas-teksts"></span>
</div>

<?php
require "footer.php";
?>