<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #5f5f60;
            height: 45px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        nav .leftside {
            display: flex;
            align-items: center;
        }

        nav .rightside {
            display: flex;
            align-items: center;
        }

        nav p {
            margin: 0;
            margin-right: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        nav img {
            width: 35px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="leftside">
            <a href="/JavaSwingWebsite/HomePage">
                <img src="../Images/home.png" alt="home logo">
            </a>
        </div>
        <div class="rightside">
            <p>More About Us:</p>
            <a href="/JavaSwingWebsite/MemberPages">
                <img src="../Images/user.png" alt="user logo">
            </a>
        </div>
    </nav>
</body>

</html>
