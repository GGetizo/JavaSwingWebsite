<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <title>Meet the Members</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include '../components/navbar.php'; ?>
    
    <div class="header">
        <h1>Meet the Members</h1>
    </div>
    
    <div class="member-section">
        <?php
      
        $members = [
            ["name" => "Gabriel Franco S. Getizo", "role" => "Leader & Coder", "photo" => "../Images/Gabriel_Franco_S._Getizo.jpg"],
            ["name" => "Sheera Mae D. Magnaye", "role" => "Documentation Lead", "photo" => "../Images/Sheera _Mae_D._Magnaye.png"],
            ["name" => "Arvin Joseph M. Geguna", "role" => "Coder", "photo" => "../Images/Arvin_Joseph_M._Geguna.png"],
            ["name" => "Kristian Anthony R. Espinase", "role" => "Documentation", "photo" => "../Images/Kristian_Anthony_R_Espinase.JPEG"],
            ["name" => "Jaela Mae B. Tuquib", "role" => "Documentation", "photo" => "../Images/Jaela_Mae_B_Tuquib.jpg"],
            ["name" => "Kristil Mae P. Obor", "role" => "Documentation", "photo" => "../Images/Kristil_Mae_P._OBOR.jpg"]
        ];
        ?>

        <div class="member-row">
            <?php 

            foreach ($members as $index => $member) {
                if ($index < 3) {
                    echo '<div class="member">
                            <img src="' . $member['photo'] . '" alt="' . $member['name'] . '" class="member-photo">
                            <p>' . $member['name'] . '</p>
                            <strong>' . $member['role'] . '</strong>
                          </div>';
                }
            }
            ?>
        </div>

        <div class="color-divider">
            <div class="color-top"></div> 
            <div class="color-bottom"></div> 
        </div> 
    
        <div class="member-row second">
            <?php 
            
            foreach ($members as $index => $member) {
                if ($index >= 3) {
                    echo '<div class="member">
                            <img src="' . $member['photo'] . '" alt="' . $member['name'] . '" class="member-photo">
                            <p>' . $member['name'] . '</p>
                            <strong>' . $member['role'] . '</strong>
                          </div>';
                }
            }
            ?>
        </div>
        
        <div class="group-pic-section">
            <h2>Group Pic</h2>
            <img src="../Images/462135063_750176873920398_5647875063775455215_n.jpg" alt="Group picture of the team" class="group-pic">
        </div>

        <a href="../Images/documentation..docx" download="documentation..docx" class="download-link">Download Documentation</a>
    </div>

    <div class="color-block"></div>
</body>
</html>
