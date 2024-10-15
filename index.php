<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.5">
    <title>Meet the Members</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>Meet the Members</h1>
    </div>

   

    <?php
    // Array holding the members' details
    $members = [
        ["name" => "Gabriel Franco S. Getizo", "role" => "Leader", "photo" => "Gabriel_Franco_S._Getizo.jpg"],
        ["name" => "Sheera Mae D. Magnaye", "role" => "Member", "photo" => "Sheera_Mae_D._Magnaye.png"],
        ["name" => "Arvin Joseph M. Geguna", "role" => "Member", "photo" => "Arvin_Joseph_M._Geguna.png"],
        ["name" => "Kristian Anthony R. Espinase", "role" => "Member", "photo" => "Kristian_Anthony_R_Espinase.jpg"],
        ["name" => "Jaela Mae B. Tuquib", "role" => "Member", "photo" => "Jaela_Mae_B_Tuquib.jpg"],
        ["name" => "Kristil Mae P. Obor", "role" => "Member", "photo" => "Kristil_Mae_P._OBOR.jpg"]
    ];
    ?>

    <div class="member-section">
        <div class="member-row">
            <?php 
            // Loop through the first 3 members and display them
            foreach ($members as $index => $member) {
                if ($index < 3) {
                    echo '<div class="member">
                            <img src="' . $member['photo'] . '" alt="Member ' . ($index+1) . '" class="member-photo">
                            <p>' . $member['name'] . '</p>
                            <strong>' . $member['role'] . '</strong>
                          </div>';
                }
            }
            ?>
        </div>

        <div class="color-divider">
            <div class="color-top"></div> <!-- Top color -->
            <div class="color-bottom"></div> <!-- Bottom color -->
        </div> <!-- Color divider in the middle -->

        <div class="member-row second">
            <?php 
            // Loop through the next 3 members and display them
            foreach ($members as $index => $member) {
                if ($index >= 3 && $index < 6) {
                    echo '<div class="member">
                            <img src="' . $member['photo'] . '" alt="Member ' . ($index+1) . '" class="member-photo">
                            <p>' . $member['name'] . '</p>
                            <strong>' . $member['role'] . '</strong>
                          </div>';
                }
            }
            ?>
        </div>

        <div class="group-pic-section">
    <h2>Group Pic</h2>
    <img src="462135063_750176873920398_5647875063775455215_n.jpg" alt="Group Picture" class="group-pic">
</div>


<a href="docs/documentation.docx" download="documentation.docx" class="download-link">Download Documentation</a>



    </div>

    <div class="color-block"></div> <!-- Color block at the bottom -->
</body>
</html>
