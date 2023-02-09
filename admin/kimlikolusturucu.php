<?php
include_once "../server/rolecontrol.php";
$customCSS = array(
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link rel="icon" href="https://quarex.pro/assets/images/quarexlogox2.png" type="image/x-icon" />',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>'

);

$page_title = 'Kimlik Arşivi';
include 'enbuyukbenimaminakodumuncocuklari.php';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

error_reporting(0);

?>

<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kimlik Arşivi</h4>
                    <p class="mb-1">
                    <p>
                        Uygun bulduğunuz kimlik görselin altındaki indirme butonuna tıklayarak indirebilirsiniz.</br>
                    </p>
                    </p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">
                            
                           
                            <div class="table-responsive">
                                <div class="uzunluk">
                                <img src="admin/kimlikler/quarex1.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex1.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex2.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex2.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex3.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex3.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex4.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex4.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex5.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex5.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex7.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex7.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex8.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex8.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex9.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex9.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex10.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex10.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex11.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex11.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex12.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex12.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex13.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex13.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex14.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex14.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex15.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex15.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex16.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex16.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex17.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex17.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex18.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex18.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex19.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex19.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex20.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex20.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex21.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex21.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex22.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex22.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex23.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex23.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex24.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex24.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex25.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex25.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex26.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex26.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex27.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex27.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex28.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex28.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex29.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex29.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex30.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex30.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex31.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex31.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex32.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex32.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex33.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex33.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex34.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex34.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex35.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex35.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex36.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex36.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex37.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex37.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex38.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex38.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex39.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex39.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex40.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex40.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex41.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex41.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex42.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex42.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex43.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex43.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex44.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex44.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex45.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex45.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex46.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex46.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex47.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex47.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex48.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex48.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex49.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex49.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex50.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex50.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex51.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex51.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex52.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex52.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex53.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex53.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex54.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex54.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex55.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex55.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex56.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex56.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex57.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex57.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex58.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex58.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex59.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex59.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex60.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex60.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex61.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex61.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex62.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex62.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex63.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex63.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex64.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex64.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex65.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex65.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex66.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex66.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex67.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex67.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex68.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex68.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex69.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex69.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex70.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex70.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex71.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex71.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex72.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex72.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex73.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex73.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex74.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex74.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex75.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex75.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex76.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex76.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex77.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex77.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex78.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex78.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex79.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex79.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex80.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex80.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex81.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex81.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex82.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex82.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex83.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex83.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex84.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex84.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex85.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex85.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex86.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex86.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex87.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex87.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex88.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex88.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex89.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex89.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex90.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex90.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex91.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex91.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex92.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex92.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex93.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex93.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex94.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex94.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex95.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex95.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex96.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex96.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex97.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex97.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex98.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex98.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex99.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex99.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex100.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex100.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex101.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex101.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex102.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex102.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex103.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex103.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex104.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex104.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex105.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex105.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex106.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex106.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex107.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex107.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex108.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex108.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex109.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex109.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex110.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex110.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex111.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex111.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex112.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex112.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex113.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex113.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex114.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex114.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex115.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex115.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex116.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex116.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex117.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex117.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex118.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex118.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex119.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex119.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex120.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex120.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex121.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex121.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex122.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex122.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex123.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex123.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex124.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex124.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex125.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex125.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex126.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex126.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex127.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex127.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex128.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex128.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex129.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex129.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex130.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex130.jpeg" download>Download Image Dosya</a><br><br>
                                <img src="admin/kimlikler/quarex131.jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/quarex131.jpeg" download>Download Image Dosya</a><br><br>
                                


                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<style>
    
.a {
    width: %20;
    font-family: impact;
    background-color: #83d8ae;
    border-color: #83d8ae;
    color: #fff;
    font-size:15px;
}


</style>
<style>
body {
    background-image: linear-gradient(to right, #0099f7, #f11712);
}
</style>


    </div>
    <!--BİTİŞ-->
    <?php
    include('inc/footer_native.php');
    include('inc/footer_main.php');
    ?>
