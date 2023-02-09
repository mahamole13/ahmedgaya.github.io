<?php
include_once "../server/rolecontrol.php";
$customCSS = array(
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>'

);

$page_title = 'SOYAĞACI SORGU';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

error_reporting(0);

?>
<div class="arama">
        <div class="content-body">

            <section id="basic-input">

                <div class="row">

                    <div class="col-lg-12">



<br>

</h2>

</div>
</div>


<br>
		
 <div class="card">
                                        <div class="card-body">


<p>
<h4 class="card-title mb-4">SOYAĞACI SORGU</h4>
<p class="mb-1">
                   <p>
                        Soyağacı sorgulanacak kişinin T.C Nosunu giriniz.</br>
</p>
                            </div>
                            <form method="post">
                                <div class="card-body">
                                    <div class="row">
                                        <section id="floating-label-input">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-6">
                                                    <div class="form-floating">
                                                        <div class="mb-1">
                                                            <input type="text" class="form-control" name="ad" placeholder="TC" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </section>



                                        <div class="card-header">

                                            <section id="bootstrap-toasts">

                                                <center>
<button type="submit" name="ara" class="btn waves-effect waves-light btn-rounded btn-primary" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula</button> </form>
<button id="durdurButon" type="button" class="btn waves-effect waves-light btn-rounded btn-danger" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-trash-alt"></i><a href="mernis2015.php" class="text-white"> Sıfırla </a></button>
<button id="temizleButon" type="button" class="btn waves-effect waves-light btn-rounded btn-warning" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-print"></i> Yazdır Detay</button><br><br>
</center>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </section>

            <div class="content-body">

                <div class="row" id="basic-table">

                    <div class="col-12">

                        <div class="card">

                            <div class="table-responsive">

                                <table id="example2" class="table">

                                    <thead>

                                        <tr style="text-align: center;">

                <th>Yakınlık</th>
                                <th>T.C.</th>
                                <th>Adı</th>
                                <th>Soyadı</th>
                                <th>Doğum Tarihi</th>
                                <th>Anne Adı</th>
                                <th>Anne TC</th>
                                <th>Baba Adı</th>
                                <th>Baba TC</th>
                                <th>Nüfus İl</th>
                <th>Nüfus İlçe</th>
                <th>Uyruk</th>

                                        </tr>

                                    </thead>
            <?php
            $baglanti = new mysqli('localhost', 'root', '', '101m');
            if (isset($_POST["ara"])) {
                $str = $_POST["ad"];
                $sth = $baglanti->prepare("SELECT * FROM `101m`");
            // read all row from database table
                        $sql = "SELECT * FROM `101m` WHERE `TC` = '$str'";
                        $result = $baglanti->query($sql);
 
            // read data of each row
                        while($row = $result->fetch_assoc()) {
                echo "<tr>
                   <td> KENDİSİ </td>
                   <td>" . $row["TC"] . "</td>
                   <td>" . $row["ADI"] . "</td>
                   <td>" . $row["SOYADI"] . "</td>
                   <td>" . $row["DOGUMTARIHI"] . "</td>
                   <td>" . $row["ANNEADI"] . "</td>
                   <td>" . $row["ANNETC"] . "</td>
                   <td>" . $row["BABAADI"] . "</td>
                   <td>" . $row["BABATC"] . "</td>
                   <td>" . $row["NUFUSIL"] . "</td>
                   <td>" . $row["NUFUSILCE"] . "</td>
                   <td>" . $row["UYRUK"] . "</td>
               </tr>";
                $sqlcocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultcocugu = $baglanti->query($sqlcocugu);
 
                $sqlkardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                $resultkardesi = $baglanti->query($sqlkardesi);
                $sqlbabasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                $resultbabasi = $baglanti->query($sqlbabasi);
                $sqlanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                $resultanasi = $baglanti->query($sqlanasi);
 
                $sqlkendicocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultkendicocugu = $baglanti->query($sqlkendicocugu);
                while($row = $resultkendicocugu->fetch_assoc()) {
                    echo "<tr>
                       <td> ÇOCUĞU </td>
                       <td>" . $row["TC"] . "</td>
                       <td>" . $row["ADI"] . "</td>
                       <td>" . $row["SOYADI"] . "</td>
                       <td>" . $row["DOGUMTARIHI"] . "</td>
                       <td>" . $row["ANNEADI"] . "</td>
                       <td>" . $row["ANNETC"] . "</td>
                       <td>" . $row["BABAADI"] . "</td>
                       <td>" . $row["BABATC"] . "</td>
                       <td>" . $row["NUFUSIL"] . "</td>
                       <td>" . $row["NUFUSILCE"] . "</td>
                       <td>" . $row["UYRUK"] . "</td>
                   </tr>";
                    $sqlkendikendicocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultkendikendicocugu = $baglanti->query($sqlkendikendicocugu);    
                    while($row = $resultkendikendicocugu->fetch_assoc()) {
                        echo "<tr>
                           <td> TORUNU </td>
                           <td>" . $row["TC"] . "</td>
                           <td>" . $row["ADI"] . "</td>
                           <td>" . $row["SOYADI"] . "</td>
                           <td>" . $row["DOGUMTARIHI"] . "</td>
                           <td>" . $row["ANNEADI"] . "</td>
                           <td>" . $row["ANNETC"] . "</td>
                           <td>" . $row["BABAADI"] . "</td>
                           <td>" . $row["BABATC"] . "</td>
                           <td>" . $row["NUFUSIL"] . "</td>
                           <td>" . $row["NUFUSILCE"] . "</td>
                           <td>" . $row["UYRUK"] . "</td>
                       </tr>";
                        $sqlkendikendikendicocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultkendikendikendicocugu = $baglanti->query($sqlkendikendikendicocugu);    
                        while($row = $resultkendikendikendicocugu->fetch_assoc()) {
                            echo "<tr>
                               <td> TORUNUNUN ÇOCUĞU </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                           
                        }
                    }
                }
                while($row = $resultkardesi->fetch_assoc()) {
                    echo "<tr>
                       <td> KARDEŞİ </td>
                       <td>" . $row["TC"] . "</td>
                       <td>" . $row["ADI"] . "</td>
                       <td>" . $row["SOYADI"] . "</td>
                       <td>" . $row["DOGUMTARIHI"] . "</td>
                       <td>" . $row["ANNEADI"] . "</td>
                       <td>" . $row["ANNETC"] . "</td>
                       <td>" . $row["BABAADI"] . "</td>
                       <td>" . $row["BABATC"] . "</td>
                       <td>" . $row["NUFUSIL"] . "</td>
                       <td>" . $row["NUFUSILCE"] . "</td>
                       <td>" . $row["UYRUK"] . "</td>
                   </tr>";
                    $sqlkardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultkardescocugu = $baglanti->query($sqlkardescocugu);
                    while($row = $resultkardescocugu->fetch_assoc()) {
                        echo "<tr>
                           <td> KARDEŞİNİN ÇOCUĞU </td>
                           <td>" . $row["TC"] . "</td>
                           <td>" . $row["ADI"] . "</td>
                           <td>" . $row["SOYADI"] . "</td>
                           <td>" . $row["DOGUMTARIHI"] . "</td>
                           <td>" . $row["ANNEADI"] . "</td>
                           <td>" . $row["ANNETC"] . "</td>
                           <td>" . $row["BABAADI"] . "</td>
                           <td>" . $row["BABATC"] . "</td>
                           <td>" . $row["NUFUSIL"] . "</td>
                           <td>" . $row["NUFUSILCE"] . "</td>
                           <td>" . $row["UYRUK"] . "</td>
                       </tr>";
                       
                        $sqlkardeskardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultkardeskardescocugu = $baglanti->query($sqlkardeskardescocugu);    
                        while($row = $resultkardeskardescocugu->fetch_assoc()) {
                            echo "<tr>
                               <td> KARDEŞİNİN TORUNU </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                            $sqlkardeskardeskardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultkardeskardeskardescocugu = $baglanti->query($sqlkardeskardeskardescocugu);    
                            while($row = $resultkardeskardeskardescocugu->fetch_assoc()) {
                                echo "<tr>
                                   <td> KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                               
                            }
                        }
                    }
   
                }
   
                while($row = $resultbabasi->fetch_assoc()) {
                    echo "<tr>
                       <td> BABASI </td>
                       <td>" . $row["TC"] . "</td>
                       <td>" . $row["ADI"] . "</td>
                       <td>" . $row["SOYADI"] . "</td>
                       <td>" . $row["DOGUMTARIHI"] . "</td>
                       <td>" . $row["ANNEADI"] . "</td>
                       <td>" . $row["ANNETC"] . "</td>
                       <td>" . $row["BABAADI"] . "</td>
                       <td>" . $row["BABATC"] . "</td>
                       <td>" . $row["NUFUSIL"] . "</td>
                       <td>" . $row["NUFUSILCE"] . "</td>
                       <td>" . $row["UYRUK"] . "</td>
                   </tr>";
                    $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                    $resultbabakardesi = $baglanti->query($sqlbabakardesi);
                    $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                    $resultbabababasi = $baglanti->query($sqlbabababasi);
                    $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                    $resultbabaanasi = $baglanti->query($sqlbabaanasi);
   
                    while($row = $resultbabakardesi->fetch_assoc()) {
                        echo "<tr>
                           <td> AMCA/HALA </td>
                           <td>" . $row["TC"] . "</td>
                           <td>" . $row["ADI"] . "</td>
                           <td>" . $row["SOYADI"] . "</td>
                           <td>" . $row["DOGUMTARIHI"] . "</td>
                           <td>" . $row["ANNEADI"] . "</td>
                           <td>" . $row["ANNETC"] . "</td>
                           <td>" . $row["BABAADI"] . "</td>
                           <td>" . $row["BABATC"] . "</td>
                           <td>" . $row["NUFUSIL"] . "</td>
                           <td>" . $row["NUFUSILCE"] . "</td>
                           <td>" . $row["UYRUK"] . "</td>
                       </tr>";
                        $sqlbabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultbabakardescocugu = $baglanti->query($sqlbabakardescocugu);
                        while($row = $resultbabakardescocugu->fetch_assoc()) {
                            echo "<tr>
                               <td> AMCASININ/HALASININ ÇOCUĞU </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                            $sqlbabakardesbabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultbabakardesbabakardescocugu = $baglanti->query($sqlbabakardesbabakardescocugu);    
                            while($row = $resultbabakardesbabakardescocugu->fetch_assoc()) {
                                echo "<tr>
                                   <td> AMCASININ/HALASININ TORUNU </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                                $sqlbabakardesbabakardesbabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultbabakardesbabakardesbabakardescocugu = $baglanti->query($sqlbabakardesbabakardesbabakardescocugu);    
                                while($row = $resultbabakardesbabakardesbabakardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                       <td> AMCASININ/HALASININ TORUNUNUN ÇOCUĞU </td>
                                       <td>" . $row["TC"] . "</td>
                                       <td>" . $row["ADI"] . "</td>
                                       <td>" . $row["SOYADI"] . "</td>
                                       <td>" . $row["DOGUMTARIHI"] . "</td>
                                       <td>" . $row["ANNEADI"] . "</td>
                                       <td>" . $row["ANNETC"] . "</td>
                                       <td>" . $row["BABAADI"] . "</td>
                                       <td>" . $row["BABATC"] . "</td>
                                       <td>" . $row["NUFUSIL"] . "</td>
                                       <td>" . $row["NUFUSILCE"] . "</td>
                                       <td>" . $row["UYRUK"] . "</td>
                                   </tr>";
                                   
                                }
                            }
 
                        }
                    }
           
                        while($row = $resultbabababasi->fetch_assoc()) {
                            echo "<tr>
                               <td> DEDESİ </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                            $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                            $resultbabakardesi = $baglanti->query($sqlbabakardesi);
                            $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                            $resultbabababasi = $baglanti->query($sqlbabababasi);
                            $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                            $resultbabaanasi = $baglanti->query($sqlbabaanasi);
           
                            while($row = $resultbabakardesi->fetch_assoc()) {
                                echo "<tr>
                                   <td> DEDESİNİN KARDEŞİ </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                                $sqlbabababakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultbabababakardescocugu = $baglanti->query($sqlbabababakardescocugu);
                                while($row = $resultbabababakardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                       <td> DEDESİNİN KARDEŞİNİN ÇOCUĞU </td>
                                       <td>" . $row["TC"] . "</td>
                                       <td>" . $row["ADI"] . "</td>
                                       <td>" . $row["SOYADI"] . "</td>
                                       <td>" . $row["DOGUMTARIHI"] . "</td>
                                       <td>" . $row["ANNEADI"] . "</td>
                                       <td>" . $row["ANNETC"] . "</td>
                                       <td>" . $row["BABAADI"] . "</td>
                                       <td>" . $row["BABATC"] . "</td>
                                       <td>" . $row["NUFUSIL"] . "</td>
                                       <td>" . $row["NUFUSILCE"] . "</td>
                                       <td>" . $row["UYRUK"] . "</td>
                                   </tr>";
                                    $sqlbabababakardesbabababakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                    $resultbabababakardesbabababakardescocugu = $baglanti->query($sqlbabababakardesbabababakardescocugu);    
                                    while($row = $resultbabababakardesbabababakardescocugu->fetch_assoc()) {
                                        echo "<tr>
                                           <td> DEDESİNİN KARDEŞİNİN TORUNU </td>
                                           <td>" . $row["TC"] . "</td>
                                           <td>" . $row["ADI"] . "</td>
                                           <td>" . $row["SOYADI"] . "</td>
                                           <td>" . $row["DOGUMTARIHI"] . "</td>
                                           <td>" . $row["ANNEADI"] . "</td>
                                           <td>" . $row["ANNETC"] . "</td>
                                           <td>" . $row["BABAADI"] . "</td>
                                           <td>" . $row["BABATC"] . "</td>
                                           <td>" . $row["NUFUSIL"] . "</td>
                                           <td>" . $row["NUFUSILCE"] . "</td>
                                           <td>" . $row["UYRUK"] . "</td>
                                       </tr>";
                                        $sqlbabababakardesbabababakardesbabababakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                        $resultbabababakardesbabababakardesbabababakardescocugu = $baglanti->query($sqlbabababakardesbabababakardesbabababakardescocugu);    
                                        while($row = $resultbabababakardesbabababakardesbabababakardescocugu->fetch_assoc()) {
                                            echo "<tr>
                                               <td> DEDESİNİN KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                               <td>" . $row["TC"] . "</td>
                                               <td>" . $row["ADI"] . "</td>
                                               <td>" . $row["SOYADI"] . "</td>
                                               <td>" . $row["DOGUMTARIHI"] . "</td>
                                               <td>" . $row["ANNEADI"] . "</td>
                                               <td>" . $row["ANNETC"] . "</td>
                                               <td>" . $row["BABAADI"] . "</td>
                                               <td>" . $row["BABATC"] . "</td>
                                               <td>" . $row["NUFUSIL"] . "</td>
                                               <td>" . $row["NUFUSILCE"] . "</td>
                                               <td>" . $row["UYRUK"] . "</td>
                                           </tr>";
                                           
                                        }
                                    }
                                }
                            }
               
                            while($row = $resultbabababasi->fetch_assoc()) {
                                echo "<tr>
                                   <td> DEDESİNİN BABASI </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                               
                            }
                            while($row = $resultbabaanasi->fetch_assoc()) {
                                echo "<tr>
                                   <td> DEDESİNİN ANNESI </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                               
                            }
 
                        }
                        while($row = $resultbabaanasi->fetch_assoc()) {
                            echo "<tr>
                               <td> BABASININ ANNESI </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                            $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                            $resultbabakardesi = $baglanti->query($sqlbabakardesi);
                            $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                            $resultbabababasi = $baglanti->query($sqlbabababasi);
                            $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                            $resultbabaanasi = $baglanti->query($sqlbabaanasi);
           
                            while($row = $resultbabakardesi->fetch_assoc()) {
                                echo "<tr>
                                   <td> BABAANNESİNİN KARDEŞİ </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                                $sqlbabaannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultbabaannekardescocugu = $baglanti->query($sqlbabaannekardescocugu);
                                while($row = $resultbabaannekardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                       <td> BABAANNESİNİN KARDEŞİNİN ÇOCUĞU </td>
                                       <td>" . $row["TC"] . "</td>
                                       <td>" . $row["ADI"] . "</td>
                                       <td>" . $row["SOYADI"] . "</td>
                                       <td>" . $row["DOGUMTARIHI"] . "</td>
                                       <td>" . $row["ANNEADI"] . "</td>
                                       <td>" . $row["ANNETC"] . "</td>
                                       <td>" . $row["BABAADI"] . "</td>
                                       <td>" . $row["BABATC"] . "</td>
                                       <td>" . $row["NUFUSIL"] . "</td>
                                       <td>" . $row["NUFUSILCE"] . "</td>
                                       <td>" . $row["UYRUK"] . "</td>
                                   </tr>";
                                    $sqlbabaannekardesbabaannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                    $resultbabaannekardesbabaannekardescocugu = $baglanti->query($sqlbabaannekardesbabaannekardescocugu);    
                                    while($row = $resultbabaannekardesbabaannekardescocugu->fetch_assoc()) {
                                        echo "<tr>
                                           <td> BABAANNESİNİN KARDEŞİNİN TORUNU </td>
                                           <td>" . $row["TC"] . "</td>
                                           <td>" . $row["ADI"] . "</td>
                                           <td>" . $row["SOYADI"] . "</td>
                                           <td>" . $row["DOGUMTARIHI"] . "</td>
                                           <td>" . $row["ANNEADI"] . "</td>
                                           <td>" . $row["ANNETC"] . "</td>
                                           <td>" . $row["BABAADI"] . "</td>
                                           <td>" . $row["BABATC"] . "</td>
                                           <td>" . $row["NUFUSIL"] . "</td>
                                           <td>" . $row["NUFUSILCE"] . "</td>
                                           <td>" . $row["UYRUK"] . "</td>
                                       </tr>";
                                        $sqlbabaannekardesbabaannekardesbabaannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                        $resultbabaannekardesbabaannekardesbabaannekardescocugu = $baglanti->query($sqlbabaannekardesbabaannekardesbabaannekardescocugu);    
                                        while($row = $resultbabaannekardesbabaannekardesbabaannekardescocugu->fetch_assoc()) {
                                            echo "<tr>
                                               <td> BABAANNESİNİN KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                               <td>" . $row["TC"] . "</td>
                                               <td>" . $row["ADI"] . "</td>
                                               <td>" . $row["SOYADI"] . "</td>
                                               <td>" . $row["DOGUMTARIHI"] . "</td>
                                               <td>" . $row["ANNEADI"] . "</td>
                                               <td>" . $row["ANNETC"] . "</td>
                                               <td>" . $row["BABAADI"] . "</td>
                                               <td>" . $row["BABATC"] . "</td>
                                               <td>" . $row["NUFUSIL"] . "</td>
                                               <td>" . $row["NUFUSILCE"] . "</td>
                                               <td>" . $row["UYRUK"] . "</td>
                                           </tr>";
                                           
                                        }
                                    }
                                }
 
                            }
               
                            while($row = $resultbabababasi->fetch_assoc()) {
                                echo "<tr>
                                   <td> BABAANNESİNİN BABASI </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                               
                            }
                            while($row = $resultbabaanasi->fetch_assoc()) {
                                echo "<tr>
                                   <td> BABAANNESİNİN ANNESI </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                               
                            }
   
                        }
                    }
                }
                while($row = $resultanasi->fetch_assoc()) {
                    echo "<tr>
                       <td> ANNESI </td>
                       <td>" . $row["TC"] . "</td>
                       <td>" . $row["ADI"] . "</td>
                       <td>" . $row["SOYADI"] . "</td>
                       <td>" . $row["DOGUMTARIHI"] . "</td>
                       <td>" . $row["ANNEADI"] . "</td>
                       <td>" . $row["ANNETC"] . "</td>
                       <td>" . $row["BABAADI"] . "</td>
                       <td>" . $row["BABATC"] . "</td>
                       <td>" . $row["NUFUSIL"] . "</td>
                       <td>" . $row["NUFUSILCE"] . "</td>
                       <td>" . $row["UYRUK"] . "</td>
                   </tr>";
                    $sqlannekardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                    $resultannekardesi = $baglanti->query($sqlannekardesi);
                    $sqlannebabasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                    $resultannebabasi = $baglanti->query($sqlannebabasi);
                    $sqlanneanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                    $resultanneanasi = $baglanti->query($sqlanneanasi);
   
                    while($row = $resultannekardesi->fetch_assoc()) {
                        echo "<tr>
                           <td> DAYISI/TEYZESİ </td>
                           <td>" . $row["TC"] . "</td>
                           <td>" . $row["ADI"] . "</td>
                           <td>" . $row["SOYADI"] . "</td>
                           <td>" . $row["DOGUMTARIHI"] . "</td>
                           <td>" . $row["ANNEADI"] . "</td>
                           <td>" . $row["ANNETC"] . "</td>
                           <td>" . $row["BABAADI"] . "</td>
                           <td>" . $row["BABATC"] . "</td>
                           <td>" . $row["NUFUSIL"] . "</td>
                           <td>" . $row["NUFUSILCE"] . "</td>
                           <td>" . $row["UYRUK"] . "</td>
                       </tr>";
                        $sqlannekardescocugu = "SELECT * FROM `101m` WHERE `BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ";
                        $resultannekardescocugu = $baglanti->query($sqlannekardescocugu);
                        while($row = $resultannekardescocugu->fetch_assoc()) {
                            echo "<tr>
                               <td> DAYISININ/TEYZESİNİN ÇOCUĞU </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                            $sqlannekardesannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultannekardesannekardescocugu = $baglanti->query($sqlannekardesannekardescocugu);    
                            while($row = $resultannekardesannekardescocugu->fetch_assoc()) {
                                echo "<tr>
                                   <td> DAYISININ/TEYZESİNİN KARDEŞİNİN TORUNU </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                                $sqlannekardesannekardesannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultannekardesannekardesannekardescocugu = $baglanti->query($sqlannekardesannekardesannekardescocugu);    
                                while($row = $resultannekardesannekardesannekardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                       <td> DAYISININ/TEYZESİNİN TORUNUNUN ÇOCUĞU </td>
                                       <td>" . $row["TC"] . "</td>
                                       <td>" . $row["ADI"] . "</td>
                                       <td>" . $row["SOYADI"] . "</td>
                                       <td>" . $row["DOGUMTARIHI"] . "</td>
                                       <td>" . $row["ANNEADI"] . "</td>
                                       <td>" . $row["ANNETC"] . "</td>
                                       <td>" . $row["BABAADI"] . "</td>
                                       <td>" . $row["BABATC"] . "</td>
                                       <td>" . $row["NUFUSIL"] . "</td>
                                       <td>" . $row["NUFUSILCE"] . "</td>
                                       <td>" . $row["UYRUK"] . "</td>
                                   </tr>";
                                   
                                }
                            }
 
                        }
                    }
       
                    while($row = $resultannebabasi->fetch_assoc()) {
                        echo "<tr>
                           <td> ANNESİNİN BABASI </td>
                           <td>" . $row["TC"] . "</td>
                           <td>" . $row["ADI"] . "</td>
                           <td>" . $row["SOYADI"] . "</td>
                           <td>" . $row["DOGUMTARIHI"] . "</td>
                           <td>" . $row["ANNEADI"] . "</td>
                           <td>" . $row["ANNETC"] . "</td>
                           <td>" . $row["BABAADI"] . "</td>
                           <td>" . $row["BABATC"] . "</td>
                           <td>" . $row["NUFUSIL"] . "</td>
                           <td>" . $row["NUFUSILCE"] . "</td>
                           <td>" . $row["UYRUK"] . "</td>
                       </tr>";
                        $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                        $resultbabakardesi = $baglanti->query($sqlbabakardesi);
                        $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                        $resultbabababasi = $baglanti->query($sqlbabababasi);
                        $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                        $resultbabaanasi = $baglanti->query($sqlbabaanasi);
       
                        while($row = $resultbabakardesi->fetch_assoc()) {
                            echo "<tr>
                               <td> ANNESİNİN BABASININ KARDEŞİ </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                            $sqlannebabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultannebabakardescocugu = $baglanti->query($sqlannebabakardescocugu);
                            while($row = $resultannebabakardescocugu->fetch_assoc()) {
                                echo "<tr>
                                   <td> ANNESİNİN BABASININ KARDEŞİNİN ÇOCUĞU </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                                $sqlannebabakardesannebabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultannebabakardesannebabakardescocugu = $baglanti->query($sqlannebabakardesannebabakardescocugu);    
                                while($row = $resultannebabakardesannebabakardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                       <td> ANNESİNİN BABASININ KARDEŞİNİN TORUNU </td>
                                       <td>" . $row["TC"] . "</td>
                                       <td>" . $row["ADI"] . "</td>
                                       <td>" . $row["SOYADI"] . "</td>
                                       <td>" . $row["DOGUMTARIHI"] . "</td>
                                       <td>" . $row["ANNEADI"] . "</td>
                                       <td>" . $row["ANNETC"] . "</td>
                                       <td>" . $row["BABAADI"] . "</td>
                                       <td>" . $row["BABATC"] . "</td>
                                       <td>" . $row["NUFUSIL"] . "</td>
                                       <td>" . $row["NUFUSILCE"] . "</td>
                                       <td>" . $row["UYRUK"] . "</td>
                                   </tr>";
                                    $sqlannebabakardesannebabakardesannebabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                    $resultannebabakardesannebabakardesannebabakardescocugu = $baglanti->query($sqlannebabakardesannebabakardesannebabakardescocugu);    
                                    while($row = $resultannebabakardesannebabakardesannebabakardescocugu->fetch_assoc()) {
                                        echo "<tr>
                                           <td> ANNESİNİN BABASININ KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                           <td>" . $row["TC"] . "</td>
                                           <td>" . $row["ADI"] . "</td>
                                           <td>" . $row["SOYADI"] . "</td>
                                           <td>" . $row["DOGUMTARIHI"] . "</td>
                                           <td>" . $row["ANNEADI"] . "</td>
                                           <td>" . $row["ANNETC"] . "</td>
                                           <td>" . $row["BABAADI"] . "</td>
                                           <td>" . $row["BABATC"] . "</td>
                                           <td>" . $row["NUFUSIL"] . "</td>
                                           <td>" . $row["NUFUSILCE"] . "</td>
                                           <td>" . $row["UYRUK"] . "</td>
                                       </tr>";
                                       
                                    }
                                }
 
                            }
                        }
           
                        while($row = $resultbabababasi->fetch_assoc()) {
                            echo "<tr>
                               <td> ANNESİNİN BABASININ BABASI </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                           
                        }
                        while($row = $resultbabaanasi->fetch_assoc()) {
                            echo "<tr>
                               <td> ANNESİNİN BABASININ ANNESI </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                           
                        }
                    }
                    while($row = $resultanneanasi->fetch_assoc()) {
                        echo "<tr>
                           <td> ANNESİNİN ANNESI </td>
                           <td>" . $row["TC"] . "</td>
                           <td>" . $row["ADI"] . "</td>
                           <td>" . $row["SOYADI"] . "</td>
                           <td>" . $row["DOGUMTARIHI"] . "</td>
                           <td>" . $row["ANNEADI"] . "</td>
                           <td>" . $row["ANNETC"] . "</td>
                           <td>" . $row["BABAADI"] . "</td>
                           <td>" . $row["BABATC"] . "</td>
                           <td>" . $row["NUFUSIL"] . "</td>
                           <td>" . $row["NUFUSILCE"] . "</td>
                           <td>" . $row["UYRUK"] . "</td>
                       </tr>";
                        $sqlannekardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                        $resultannekardesi = $baglanti->query($sqlannekardesi);
                        $sqlannebabasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                        $resultannebabasi = $baglanti->query($sqlannebabasi);
                        $sqlanneanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                        $resultanneanasi = $baglanti->query($sqlanneanasi);
       
                        while($row = $resultannekardesi->fetch_assoc()) {
                            echo "<tr>
                               <td> ANNESİNİN ANNESİNİN KARDEŞİ </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                            $sqlanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultanneannekardescocugu = $baglanti->query($sqlanneannekardescocugu);
                            while($row = $resultanneannekardescocugu->fetch_assoc()) {
                                echo "<tr>
                                   <td> ANNESİNİN ANNESİNİN KARDEŞİNİN ÇOCUĞU </td>
                                   <td>" . $row["TC"] . "</td>
                                   <td>" . $row["ADI"] . "</td>
                                   <td>" . $row["SOYADI"] . "</td>
                                   <td>" . $row["DOGUMTARIHI"] . "</td>
                                   <td>" . $row["ANNEADI"] . "</td>
                                   <td>" . $row["ANNETC"] . "</td>
                                   <td>" . $row["BABAADI"] . "</td>
                                   <td>" . $row["BABATC"] . "</td>
                                   <td>" . $row["NUFUSIL"] . "</td>
                                   <td>" . $row["NUFUSILCE"] . "</td>
                                   <td>" . $row["UYRUK"] . "</td>
                               </tr>";
                                $sqlanneannekardesanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultanneannekardesanneannekardescocugu = $baglanti->query($sqlanneannekardesanneannekardescocugu);    
                                while($row = $resultanneannekardesanneannekardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                       <td> ANNESİNİN ANNESİNİN KARDEŞİNİN TORUNU </td>
                                       <td>" . $row["TC"] . "</td>
                                       <td>" . $row["ADI"] . "</td>
                                       <td>" . $row["SOYADI"] . "</td>
                                       <td>" . $row["DOGUMTARIHI"] . "</td>
                                       <td>" . $row["ANNEADI"] . "</td>
                                       <td>" . $row["ANNETC"] . "</td>
                                       <td>" . $row["BABAADI"] . "</td>
                                       <td>" . $row["BABATC"] . "</td>
                                       <td>" . $row["NUFUSIL"] . "</td>
                                       <td>" . $row["NUFUSILCE"] . "</td>
                                       <td>" . $row["UYRUK"] . "</td>
                                   </tr>";
                                    $sqlanneannekardesanneannekardesanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                    $resultanneannekardesanneannekardesanneannekardescocugu = $baglanti->query($sqlanneannekardesanneannekardesanneannekardescocugu);    
                                    while($row = $resultanneannekardesanneannekardesanneannekardescocugu->fetch_assoc()) {
                                        echo "<tr>
                                           <td> ANNESİNİN ANNESİNİN KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                           <td>" . $row["TC"] . "</td>
                                           <td>" . $row["ADI"] . "</td>
                                           <td>" . $row["SOYADI"] . "</td>
                                           <td>" . $row["DOGUMTARIHI"] . "</td>
                                           <td>" . $row["ANNEADI"] . "</td>
                                           <td>" . $row["ANNETC"] . "</td>
                                           <td>" . $row["BABAADI"] . "</td>
                                           <td>" . $row["BABATC"] . "</td>
                                           <td>" . $row["NUFUSIL"] . "</td>
                                           <td>" . $row["NUFUSILCE"] . "</td>
                                           <td>" . $row["UYRUK"] . "</td>
                                       </tr>";
                                        $sqlanneannekardesanneannekardesanneannekardesanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                        $resultanneannekardesanneannekardesanneannekardesanneannekardescocugu = $baglanti->query($sqlanneannekardesanneannekardesanneannekardesanneannekardescocugu);    
                                        while($row = $resultanneannekardesanneannekardesanneannekardesanneannekardescocugu->fetch_assoc()) {
                                            echo "<tr>
                                               <td> ANNESİNİN ANNESİNİN KARDEŞİNİN TORUNUNUN TORUNU </td>
                                               <td>" . $row["TC"] . "</td>
                                               <td>" . $row["ADI"] . "</td>
                                               <td>" . $row["SOYADI"] . "</td>
                                               <td>" . $row["DOGUMTARIHI"] . "</td>
                                               <td>" . $row["ANNEADI"] . "</td>
                                               <td>" . $row["ANNETC"] . "</td>
                                               <td>" . $row["BABAADI"] . "</td>
                                               <td>" . $row["BABATC"] . "</td>
                                               <td>" . $row["NUFUSIL"] . "</td>
                                               <td>" . $row["NUFUSILCE"] . "</td>
                                               <td>" . $row["UYRUK"] . "</td>
                                           </tr>";
                                           
                                    }
 
                                }
                            }
 
                        }
           
                        while($row = $resultannebabasi->fetch_assoc()) {
                            echo "<tr>
                               <td> ANNESİNİN ANNESİNİN BABASI </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                           
                        }
                        while($row = $resultanneanasi->fetch_assoc()) {
                            echo "<tr>
                               <td> ANNESİNİN ANNESİNİN ANNESI </td>
                               <td>" . $row["TC"] . "</td>
                               <td>" . $row["ADI"] . "</td>
                               <td>" . $row["SOYADI"] . "</td>
                               <td>" . $row["DOGUMTARIHI"] . "</td>
                               <td>" . $row["ANNEADI"] . "</td>
                               <td>" . $row["ANNETC"] . "</td>
                               <td>" . $row["BABAADI"] . "</td>
                               <td>" . $row["BABATC"] . "</td>
                               <td>" . $row["NUFUSIL"] . "</td>
                               <td>" . $row["NUFUSILCE"] . "</td>
                               <td>" . $row["UYRUK"] . "</td>
                           </tr>";
                        }
                        }
                    }
   
                }
            }
 
       
            ?>
        </tbody>
    </table>
    <?php
    include('inc/footer_native.php');
    include('inc/footer_main.php');
    ?>