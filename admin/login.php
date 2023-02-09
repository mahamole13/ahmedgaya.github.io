<?php



$customJAVA = array(
    '<script src="https://google.com/recaptcha/api.js"></script>',
);
error_reporting(0);
session_start();
session_destroy();

$page_title = 'Giriş Yap';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suck My Dick Bitches!">
    <meta name="keywords" content="worlwide,automation">
    <meta name="author" content="Earl">

    <title><?php echo $page_title ?> - Ahmed Gaya CHECKER</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">
    <link rel="shortcur icon" href="../assets/icon/favicon-16x16.png">

    <script src="https://google.com/recaptcha/api.js"></script>

    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <style>
        body {
            background-image: linear-gradient(-225deg, #000000 50%, #000000 50%);
        }

        .authent-text p {
            color: #fff;
        }

        .card {
            box-shadow: 1px 2px 29px 10px rgb(0, 217, 204);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-top: 1px solid rgba(255, 255, 255, 0.5);
            border-left: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
        }


        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#000000, #000);
            clip-path: circle(30% at right 70%);
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#000000, #000);
            clip-path: circle(28% at 10% 10%);
        }

        .EarlLogo1 {
            margin-right: 0;
            width: auto;
            height: 70px;
            margin: 25px auto;
            display: block;
            text-align: center;
            font-size: 20px;
            font-weight: 500;
        }

        #key:focus {
            background-color: red;
        }
    </style>
</head>

<body class="login-page">
	
    <!--BAŞLANGIC-->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div style="z-index: 5 !important; " class="card login-box-container">
                    <div class="card-body">
                        <img style="height: 125px;" alt="image" src="/assets/images/Ahmed.png" class="EarlLogo1">
                        <div style="margin-top: 30px;" class="authent-text">
                            <p> <span style="font-size: 20px;">Ahmed Gaya CHECKER</span> 'a Hoşgeldiniz!</p>
                            <p>Lütfen hesabınıza giriş yapın!</p>
                        </div>
                        <?php if (htmlspecialchars($_GET["alert"]) == 'wrong') { ?>
                            <div class="alert alert-danger" role="alert">
                                Yanlış anahtar girdiniz!
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'blocked') { ?>
                            <div class="alert alert-danger" role="alert">
                                Girdiğiniz anahtar yasaklanmıştır!
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'error') { ?>
                            <div class="alert alert-danger" role="alert">
                                Giriş hatası! Lütfen yönetici ile iletişime geçin.
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'captchaerr') { ?>
                            <div class="alert alert-danger" role="alert">
                                Captcha hatalı girildi!
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'banned') { ?>
                            <div class="alert alert-danger" role="alert">
                                Hesabınıza başka bir yer veya tarayıcıdan girildiği için anahtarınız yasaklanmıştır!
                            </div>
                        <?php } ?>
                        <form action="../server/kontrol.php" method="POST">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input style="background-color: black; border: none;" name="k_key" type="text" class="form-control" id="floatingPassword" placeholder="Anahtar">
                                    <label for="floatingPassword">Anahtar</label>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                
                                
                            </div>
                            <center style="margin-bottom: 10px;">
                                <div class="g-recaptcha" data-sitekey="6Ld5n3ceAAAAAIU_eEpJIUY-W4I1IayeOzW7LpJm"></div>
                            </center>
                            <div class="d-grid">
                                <button style="background-image: linear-gradient(-225deg, #434343 0%, #000000 100%); border: none;" name="loginForm" type="submit" class="btn btn-info m-b-xs">Giriş Yap</button>
                            </div>
                        </form>
                        <center>
						<iframe width="0" height="0" src="https://www.youtube.com/embed/UaPicLFJ5vE?rel=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BİTİŞ-->
    <?php include('inc/footer_main.php'); ?>
	
	<script type="text/javascript" src="https://webkodu.ozgurlukicin.com/kod-kaynak/wk-kar-efekt.js"></script>