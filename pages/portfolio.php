<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>XMQ lab.</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/styles/css/main1.css" />
</head>

<body>
    <?php
        $servername = "68.65.122.143";
        $username = "xmqljgjn_xmqlab";
        $password = "xmqzasx0903";
        $dbname = "xmqljgjn_xmq_lab";
        
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Error: " . $conn->connect_error);
        } 
    ?>
    <div class="container">
        <header class="header row hidden-xs">
            <h1 class="img-title col-sm-2">
                <img src="../assets/images/pc/about/head-logo.png" alt="lab.">
            </h1>
            <div class="underline-box col-sm-4">
                <div class="underline"></div>
            </div>
            <nav class="col-sm-5 col-sm-offset-1">
                <ul class="nav-bar">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="./about.php">About me</a>
                    </li>
                    <li>
                        <a href="./portfolio.php" class="active">Portfolio</a>
                    </li>
                    <li>
                        <a href="./contact.php">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>

        <header class="phone-header visible-xs-block">
            <div class="phone-title-box">
                <div class="phone-title">
                    <img src="../assets/images/phone/home/logo-title.png" alt="logo-title">
                </div>
                <div class="phone-lab">
                    <img src="../assets/images/phone/home/logo-lab.png" alt="logo_lab.">
                </div>
                <div class="phone-toggle-icon">
                    <img src="../assets/images/phone/home/ham-menu.png" alt="arrow">
                </div>
            </div>
            <nav class="navbar">
                <ul class="nav-bar">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="./about.php">About me</a>
                    </li>
                    <li>
                        <a class="active" href="./portfolio.php">Protfolio</a class="active">
                    </li>
                    <li>
                        <a href="./contact.php">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="row main-container">
            <div class="col-sm-3">
                <div class="photo-box">
                    <img src="../assets/images/pc/protfolio/pic.png" alt="">
                </div>
                <div class="name-box">
                    <p class="name">Xia Mingqian</p>
                    <p>
                        2017 The 8th <br>
                        national advertising <br>
                        art design competition for college students <br>
                        Second Prize
                    </p>
                    <p>
                        BLUEFOCUS subsidiary <br>
                        Beijing Snooker Technology Co., Ltd., advertising designer <br>
                        Half year
                    </p>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="title-box hidden-xs clearfix">
                    <h3>PORTFOLIO</h3>
                    <p class="date">Sep, 2017 - 2019</p>
                    <a href="./contact.php" class="hire-btn">HIRE ME</a link="./">
                </div>
                <div class="title-box visible-xs-block clearfix">
                    <a href="./contact.php" class="hire-btn">HIRE ME</a link="./">
                    <h3>PORTFOLIO</h3>
                    <p class="date">Sep, 2017 - 2019</p>
                </div>
                <div class="row gallery-box">
                    <?php
                        $sql = "SELECT Name, Type, Date FROM tbl_protfolio";
                        $result = $conn->query($sql);

                        $resultArr = array();
                        while($row = $result->fetch_assoc()) {
                            array_push($resultArr, $row);
                        }
                    ?>
                    <a class="col-sm-4 portfolio">
                        <img src="../assets/images/pc/protfolio/fish.png" alt="fish">
                        <div class="portfolio-content-box">
                            <div class="cont-box">
                                <p><?php echo $resultArr[0]["Name"] ?></p>
                                <p><?php echo $resultArr[0]["Type"] ?></p>
                                <p><?php echo $resultArr[0]["Date"] ?></p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-4 portfolio" href="./portfolio2.php">
                        <img src="../assets/images/pc/protfolio/poster.png" alt="poster">
                        <div class="portfolio-content-box">
                            <div class="cont-box">
                                <p><?php echo $resultArr[1]["Name"] ?></p>
                                <p><?php echo $resultArr[1]["Type"] ?></p>
                                <p><?php echo $resultArr[1]["Date"] ?></p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-4 portfolio">
                        <img src="../assets/images/pc/protfolio/triang.png" alt="triang">
                        <div class="portfolio-content-box">
                            <div class="cont-box">
                                <p><?php echo $resultArr[2]["Name"] ?></p>
                                <p><?php echo $resultArr[2]["Type"] ?></p>
                                <p><?php echo $resultArr[2]["Date"] ?></p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-4 portfolio" href="./portfolio1.php">
                        <img src="../assets/images/pc/protfolio/logo-yuph.png" alt="logo-yuph">
                        <div class="portfolio-content-box">
                            <div class="cont-box">
                                <p><?php echo $resultArr[3]["Name"] ?></p>
                                <p><?php echo $resultArr[3]["Type"] ?></p>
                                <p><?php echo $resultArr[3]["Date"] ?></p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-4 portfolio">
                        <img src="../assets/images/pc/protfolio/bootcamp.png" alt="bootcamp">
                        <div class="portfolio-content-box">
                            <div class="cont-box">
                                <p><?php echo $resultArr[4]["Name"] ?></p>
                                <p><?php echo $resultArr[4]["Type"] ?></p>
                                <p><?php echo $resultArr[4]["Date"] ?></p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-4 portfolio">
                        <img src="../assets/images/pc/protfolio/homesecure.png" alt="homesecure">
                        <div class="portfolio-content-box">
                            <div class="cont-box">
                                <p><?php echo $resultArr[5]["Name"] ?></p>
                                <p><?php echo $resultArr[5]["Type"] ?></p>
                                <p><?php echo $resultArr[5]["Date"] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
</body>

</html>