<?php
$page = "produkcija";
require "header.php";
?>

<script src="../assets/preces_izvade.js" defer></script>

<section id="produkti-nosaukums">
    <div class="main-container">
        <div class="filtrudala">
            <a class="btn-sm" id="filterBtn"><i class="fa-solid fa-filter"></i> Filtri</a>
            <div id="searchField">
                <input type="text" id="searchInput" placeholder="Meklē preci">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <h2>Mūsu produkcija</h2>
        <p><a href="index.php">Sākumlapa</a> <span>/</span> <a href="produkcija.php" id="now">Produkcija</a></p>
    </div>
</section>
<section id="visaProdukcija">
    <div class="main-container">
        <div class="box-container animate" id="preces-container">
        </div>
    </div>
</section>

<div class="filterBox">
    <div class="content">
        <form action="">
            <div class="box">
                <label>Sakārto produktus:</label>
                <select name="kartosana" id="kartosana">
                    <option value="">Sakārto produktus</option>
                    <option value="cenaaug">Pēc cenas augoši</option>
                    <option value="cenadilst">Pēc cenas dilstoši</option>
                    <option value="alfabetaug">Alfabeta secībā (A-Z)</option>
                    <option value="alfabetdilst">Pretēji alfabetam (Z-A)</option>
                    <option value="pievdat">No jaunākā</option>
                    <option value="pievdataug">No vecākā</option>
                </select>
            </div>
            <div class="box">
                <label>Izvēlies materiālus:</label>
                <div class="materials">
                    <div class="box1">
                        <div class="checkfield">
                            <input type="checkbox" name="materiali[]" value="Plīša dzija">
                            <p>Plīša dzija</p>
                        </div>
                        <div class="checkfield">
                            <input type="checkbox" name="materiali[]" value="Džutas dzija">
                            <p>Džutas dzija</p>
                        </div>
                    </div>
                    <div class="box2">
                        <div class="checkfield">
                            <input type="checkbox" name="materiali[]" value="Kokvilna">
                            <p>Kokvilna</p>
                        </div>
                        <div class="checkfield">
                            <input type="checkbox" name="materiali[]" value="Viskoze">
                            <p>Viskoze</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <label>Izvēlies kategoriju:</label>
                <?php
                require("assets/con_db.php");
                $kategorijas_SQL = "SELECT * FROM Waflas_kategorija WHERE Radits = 1";
                $kategorijas_rezultats = mysqli_query($savienojums, $kategorijas_SQL);
                ?>
                <select name="kategorija">
                    <option value="">Skatīt visus</option>
                    <?php
                    while ($kategorija = mysqli_fetch_assoc($kategorijas_rezultats)) {
                        echo "<option value=\"{$kategorija['Kategorijas_ID']}\">{$kategorija['Nosaukums']}</option>";
                    }
                    ?>
                </select>
            </div>

        </form>
        <button class="btn apply-filters">Pielietot</button>
        <a>Atiestatīt filtrus</a>
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