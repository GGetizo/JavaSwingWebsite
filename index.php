<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    
    body {
    background-color: #f1aeae;
    font-family: "Roboto", sans-serif;
    }

    .btn{
    border-radius: 20px;
    background-color: #000000;
    color: white;
    margin: 20px;
    height: 50px;
    width: 200px;
    }

    .btn:hover{
        background-color: white;
        color:#000000;
    }

    .btnclass{
    display: flex;
    justify-content: center;
    justify-self: center;
    text-align: center;
    }

    .title{
        font-size: 5rem;
        display: flex;
        justify-content: center;
        justify-self: center;
    }

    .description {
        font-size: 1.25rem;
        display: flex;
        justify-content: center;
        text-align: center;
        padding-bottom: 20px;
    }
    </style>
</head>
<body>
    <h1 class="title"><?php echo "JAVASWING"; ?></h1>
    <p class="description">
        <?php echo "This website is for compliance in Intermediate Web Programming"; ?>
    </p>
    <div class="btnclass">
    <a href="./HomePage">
    <button class="btn">Know More</button>
    </a>
    </div>
</body>
</html>