<div class="detail">
    <div class="left">
        <img class="avatar" src="resources/images/<?= $data["avatar"] ?>">
        <div class="stats" style="background-color: yellowgreen">
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $data["health"] ?></li>
                <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $data["attack"] ?></li>
                <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= $data["defense"] ?> </li>
            </ul>
            <ul class="gear">
                <li><b>Weapon </b><?= $data["weapon"] ?></li>
                <li><b>Armor </b><?= $data["armor"] ?></li>
            </ul>
        </div>
    </div>

    <div class="right">
        <p> <?= $data["bio"] ?></p>
    </div>
    
    <form method="post">
        <label><b>Huidige Locatie:</b></label>
            <select name="location">

            <?php
            foreach($locations as $location){
            if($data["location"] == $location["id"])
                printf("<option value=\"%s\" selected>%s</option>", $location["id"], $location["name"]);
            else
                printf("<option value=\"%s\">%s</option>", $location["id"], $location["name"]);
            } ?>
            
            </select>
        <input type="submit" value="submit">      
        
    </form>

    <div style="clear: both"></div>
</div>