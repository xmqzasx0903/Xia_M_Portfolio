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
                    <a href="./portfolio.php">Protfolio</a>
                </li>
                <li>
                    <a class="active" href="./contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

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
                        <a href="./portfolio.php">Portfolio</a>
                    </li>
                    <li>
                        <a href="./contact.php" class="active">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="row main-container">
            <div class="col-sm-3 hidden-xs">
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
            <div class="col-sm-3 col-sm-push-6 info-container">
                <div class="info-box">
                    <h3>Contact Info</h3>
                    <p class="info">xmqzasx0903@gmail.com</p>
                    <p class="info">226.504.5119</p>
                    <div class="logo-box">
                        <a href="#"><img src="../assets/images/pc/about/behance.svg" alt="behance"></a>
                        <a href="#"><img src="../assets/images/pc/about/instagram.svg" alt="instragram"></a>
                        <a href="#"><img src="../assets/images/pc/about/dribbble.svg" alt="dribbble"></a>
                        <a href="#"><img src="../assets/images/pc/about/twitter.svg" alt="twitter"></a>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-sm-pull-3 contact-container">
                <div class="contact-box">
                    <h3>Contact me</h3>
                    <p>currently available for contact or full-time work, and would love to hear from you.</p>
                </div>
                <div class="form-box">
                    <div class="row form-row">
                        <div class="col-xs-6 input-box">
                            <label for="name">Name*</label>
                            <input type="text" name="name">
                        </div>
                        <div class="col-xs-6 input-box">
                            <label for="email">Email*</label>
                            <input type="text" name="email">
                        </div>
                        <div class="col-xs-6 input-box">
                            <label for="phone">Phone*</label>
                            <input type="text" name="phone">
                        </div>
                        <div class="col-xs-6 input-box">
                            <label for="subject">Subject*</label>
                            <input type="text" name="subject">
                        </div>
                        <div class="col-xs-12 input-box">
                            <label for="message">Message</label>
                            <input type="text" name="message">
                        </div>
                        <div class="col-xs-12">
                            <button class="send-btn">Send</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="footer">
            <div class="pull-right">
                2019 All Right Reserved
            </div>
        </footer>
    </div>
    <script src="../assets/js/main.js"></script>
</body>

</html>