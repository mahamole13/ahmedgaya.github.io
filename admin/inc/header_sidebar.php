<?php
ini_set("display_errors", 0);
error_reporting(0);

include "../server/security/encrypt.php";
include "../server/baglan.php";

$krolid = $_SESSION["id"];
$krolresult = $conn->query("SELECT * FROM sh_kullanici WHERE id='$krolid'");
if ($krolresult->num_rows < 1) {
    header("Location: /logout");
    exit;
}
$krolarray = mysqli_fetch_array($krolresult);
$k_rol = $krolarray["k_rol"];
$checkID = $krolarray["id"];

?>

<style>
    .page-sidebar .accordion_menu {
  margin-top: 20px;
  height: calc(100% - 141px) !important;
  padding: 10px 15px;
}

.page-sidebar .accordion_menu > li > a {
  display: block;
  color: #fff;
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
  line-height: 45px;
  padding: 0 15px;
  text-decoration: none;
}

.page-sidebar .accordion_menu > li.active-page > a {
  color: #83d8ae;
  font-weight: 500;
}

.page-sidebar .accordion_menu > li.active-page > a > svg {
  color: #83d8ae !important;
}

.page-sidebar .accordion_menu > li.active-page ul li a.active {
  color: #fff;
}

.page-sidebar .accordion_menu > li > a:hover svg {
  margin-left: 5px;
}

.page-sidebar .accordion_menu > li > a > svg {
  width: 21px;
  height: 21px;
  line-height: 40px;
  text-align: center;
  vertical-align: text-top;
  color: #9a9cab;
  margin-right: 15px;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.page-sidebar .accordion_menu li.sidebar-title {
  font-weight: 500;
  padding: 10px 15px;
  font-size: 0.875rem;
  color: #6c757d;
  opacity: 0.8;
}

.page-sidebar .accordion_menu li a .dropdown-icon {
  float: right;
  vertical-align: middle;
  line-height: 44px;
  font-size: 10px;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.page-sidebar .accordion_menu li.open > a > .dropdown-icon {
  visibility: visible;
  transform: rotate(90deg);
}

.page-sidebar .accordion_menu li ul {
  padding: 5px 0;
  list-style: none;
}

.page-sidebar .accordion_menu li ul li a {
  color: #9a9cab;
  display: block;
  padding: 5px 15px;
  font-size: 14px;
  position: relative;
  -webkit-transition: all 0.15s ease-in-out;
  -moz-transition: all 0.15s ease-in-out;
  -o-transition: all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
  text-decoration: none;
}

.page-sidebar .accordion_menu li ul li a:hover {
  margin-left: 5px;
}

.page-sidebar .accordion_menu li ul li a i {
  font-size: 10px;
  padding-right: 21px;
  padding-left: 6px;
}

@media (min-width: 1350px) {


  .page-sidebar-collapsed .page-sidebar .accordion_menu {
    padding: 0;
    overflow: visible;
    position: absolute !important;
    height: auto !important;
    top: 50%;
    transform: translateY(-50%);
    margin-top: 0;
  }

  .page-sidebar-collapsed .page-sidebar .accordion_menu > li > a {
    font-size: 0;
  }

  .page-sidebar-collapsed .page-sidebar .accordion_menu > li > a {
    text-align: center;
    padding: 8px;
    width: 80px;
  }

  .page-sidebar-collapsed
    .page-sidebar
    .accordion_menu
    > li
    > a
    > .dropdown-icon {
    display: none;
  }

  .page-sidebar-collapsed .page-sidebar .accordion_menu > li > a > svg {
    margin: 0;
    vertical-align: middle;
  }

  .page-sidebar-collapsed .page-sidebar .accordion_menu > li {
    position: relative;
  }

  .page-sidebar-collapsed .page-sidebar .accordion_menu > li > a + ul {
    display: block !important;
    position: absolute;
    margin-left: 0;
    top: -15px;
    left: 110px;
    padding: 20px 0;
    background: #1f1f2b;
    box-shadow: 0 0 11px 1px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 0 11px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 0 11px 1px rgba(0, 0, 0, 0.05);
    min-width: 200px;
    opacity: 0;
    visibility: hidden;
    border-radius: 15px;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }

  .page-sidebar-collapsed .page-sidebar .accordion_menu > li > a + ul::after {
    position: absolute;
    top: 40px;
    left: -7px;
    right: auto;
    display: inline-block !important;
    border-right: 7px solid #1f1f2b;
    border-bottom: 7px solid transparent;
    border-top: 7px solid transparent;
    content: "";
  }

  .page-sidebar-collapsed .page-sidebar .accordion_menu > li:hover > ul,
  .page-sidebar-collapsed .page-sidebar .accordion_menu > li > a:hover + ul {
    height: auto;
    visibility: visible;
    opacity: 1;
    left: 120px;
  }

  .page-sidebar-collapsed .page-sidebar .accordion_menu > li:hover {
    width: calc(100% + 30px);
  }

  .page-sidebar-collapsed .page-sidebar .accordion_menu > li:hover > a > svg {
    color: #83d8ae;
  }}

.element::-webkit-scrollbar { width: 0 !important }

.card{
            box-shadow: 1px 2px 29px 10px rgb(0 217 204);
	        border-radius: 20px;
	        background: rgba(255, 255, 255, 0.1);
	        border-top: 1px solid rgba(255, 255, 255, 0.5);
	        border-left: 1px solid rgba(255, 255, 255, 0.5);
	        backdrop-filter: blur(10px);}


            .list-unstyled ul li ul{
                color: #fff;
            }


            .white{
                color:#fff;
            }

</style>
<div class="page-container">
    <div class="page-sidebar card">
        <img alt="image" src="assets/images/Ahmed.png" class="KronikLogo">
        <ul class="list-unstyled accordion_menu overflow-auto element">
            <li <?php if ($page_title == 'Panel') {
                    echo 'class="active-page"';
                } ?>>
                <a href="/panel"><i style="color: #fff;" data-feather="home"></i>ANASAYFA</a>
            </li>
            <li style="border-radius: 2px; margin-bottom:3px; border-top-style:solid" <?php
                if (
                    $page_title === "TC Sorgu" ||
                    $page_title === "Ad Soyad (Tüm Tr All)" ||
                    $page_title === "Soyağacı Sorgu" ||
                    $page_title === "Okul Sorgu" ||
                    $page_title === "Aile Sorgu" 
                ) {
                    echo 'class="open"';
                }
                ?>>
                <a  <?php
                    if (
                        $page_title === "TC Sorgu" ||
                        $page_title === "Ad Soyad (Tüm Tr All)" ||
                        $page_title === "Soyağacı Sorgu" ||
                        $page_title === "Adres Sorgu" ||
                        $page_title === "Aile Sorgu " 
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>SORGULAR<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                <li><a style="color: #fff;" <?php if ($page_title === "TC Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/tcsorgu"> <img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">TC Sorgu</a></li>
                    <li><a style="color: #fff;" <?php if ($page_title === "Ad Soyad (Tüm Tr All)") echo 'style="color: #83d8ae !important;"' ?> href="/adsoyad101m"> <img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">Ad Soyad Sorgu</a></li>
                    <li><a style="color: #fff;" <?php if ($page_title === "Soyağacı Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/soy"> <img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">Soyağacı Sorgu</a></li>
                    <li><a style="color: #fff" <?php if ($page_title === "Aile Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/aile"><img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">Aile Sorgu</a></li>
                </ul>
            </li>
            <li style="border-radius: 2px; margin-bottom:3px; border-top-style:solid" <?php
                if (
                    $page_title === "TC GSM" ||
                    $page_title === "GSM TC" ||
                    $page_title === "SMS BOMBER"
                ) {
                    echo 'class="open"';
                }
                ?>>
                <a <?php
                    if (
                        $page_title === "TC GSM" ||
                        $page_title === "GSM TC" ||
                        $page_title === "SMS BOMBER"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                    </svg>TELEFON<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                <li><a style="color: #fff;" <?php if ($page_title === "TC GSM") echo 'style="color: #fff !important;"' ?> href="/tcgsm"><img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">TC'den GSM</a></li>
                <li><a style="color: #fff;" <?php if ($page_title === "GSM TC") echo 'style="color: #fff !important;"' ?> href="/gsmtc"><img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">GSM'den TC</a></li>
                </ul>
                </li>
                <li style="border-radius: 2px; margin-bottom:3px; border-top-style:solid" <?php
                if (
                  $page_title === "IP Sorgu" ||
                  $page_title === "Kimlik" 

                ) {
                    echo 'class="open"';
                }
                ?>>
                <a <?php
                    if (
                      $page_title === "IP Sorgu" ||
                        $page_title === "Kimlik" 

                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                    <ellipse cx="12" cy="5" rx="9" ry="3" />
                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                </svg>EKSTRA<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                <li><a style="color: #fff;" <?php if ($page_title === "IP Sorgu") echo 'style="color: #fff !important;"' ?> href="/ipsorgu"><img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">IP Sorgu</a></li>
                <li><a style="color: #fff;" <?php if ($page_title === "Kimlik") echo 'style="color: #fff !important;"' ?> href="/kimlikolusturucu"><img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">Kimlik Arşivi</a></li>
                </ul>
                </li>

            </li>
            <?php if ($k_rol === "1") { ?>
                <li style="border-radius: 2px; margin-bottom:3px; border-top-style:solid" <?php
                    if (
                        $page_title === "User Manager" ||
                        $page_title === "User Settings" ||
                        $page_title === "Notice Sharing" ||
                        $page_title === "Kullanıcı Ekle" ||
                        $page_title === "Duyuru Düzenle" ||
                    $page_title === "Kimlik Ön Arka"

                    ) {
                        echo 'class="open"';
                    }
                    ?>>
                    <a <?php
                        if (
                            $page_title === "User Manager" ||
                            $page_title === "User Settings" ||
                            $page_title === "Notice Sharing" ||
                            $page_title === "Kullanıcı Ekle" ||
                            $page_title === "Duyuru Düzenle" ||
                            $page_title === "Zaman Aşımı" ||
                    $page_title === "Kimlik Ön Arka"
                        ) {
                            echo 'style="color: white;"';
                        }
                        ?> href="/users"><i style="color: #fff;" data-feather="lock"></i>Admin <i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul>
                        <li>
                            <a style="color: #fff;" <?php
                                if (
                                    $page_title === "Notice Sharing" ||
                                    $page_title === "Duyuru Düzenle"
                                ) {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/notice" class="active"><img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">Duyurular</a>
                        </li>
                        <li>
                            <a style="color: #fff;" <?php
                                if (
                                    $page_title === "User Manager" ||
                                    $page_title === "User Settings"
                                ) {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/users" class="active"><img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">Kullanıcılar</a>
                        </li>
                        <li>
                            <a style="color: #fff;" class="white" <?php
                                if ($page_title === "Kullanıcı Ekle") {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/adduser" class="active"><img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">Kullanıcı Ekle</a>
                        </li>
                        <li>
                            <a style="color: #fff;" <?php
                                if (
                                    $page_title === "Zaman Aşımı" ||
                                    $page_title === "Timeout"
                                ) {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/timeout" class="active"><img style="width: 15px; margin-right: 5px" src="assets/images/nokta.png" alt="">Zaman Aşımı</a>
                        </li>
                        <!--<li>
                            <a style="color: #fff;" <?php
                                if (
                                    $page_title === "Kimlik Ön Arka"
                                ) {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/wizortkimlik" class="active"><img style="width: 15px; margin-right: 5px" src="assets/images/Aquaman.png" alt="">Kimlik Fotoğrafı</a>
                        </li>
                        <li>
                            <a style="color: #fff;" <?php
                                if (
                                    $page_title === "US CC Checker"
                                ) {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/checker" class="active"><img style="width: 15px; margin-right: 5px" src="assets/images/Aquaman.png" alt="">US CC Checker</a>
                        </li>-->
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>
