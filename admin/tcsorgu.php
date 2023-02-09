<?php
include_once "../server/rolecontrol.php";
$customCSS = array('<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
'<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>'
);

$page_title = 'TC SORGU';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<div class="overlay">
    </div>
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">

</h2>

</div>
</div>


<br>
		
 <div class="card">
                                        <div class="card-body">
                                        

<p>
<h4 class="card-title mb-4">TC SORGU</h4>
<p class="mb-1">
                    <p>
                        Sorgulanacak kişinin T.C Nosunu giriniz.</br>
</p>
                        <form method="POST" action="">
                                  
                                   <input class="form-control" type="text" name="ikibinonbestc"  id="ikibinonbestc" placeholder="TC"><br>                                                                  
</div>

<center>
<button type="submit" name="yolla" class="btn waves-effect waves-light btn-rounded btn-primary" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula</button> </form><br><br>


</center>
      </div>
      
       <?php
$link = mysqli_connect("127.0.0.1", "root", "", "101m");

if($link){
  
}
if(!$link){echo "<h1>Bağlanılmadı</h1>";
} 


$port = $_POST["ikibinonbesad"];
$time = $_POST["ikibinonbessoyad"];
$il_sorgu = $_POST["ikibinonbesadil"];
$tc_sorgu = $_POST["ikibinonbestc"];
$sql = "SELECT * FROM 101m WHERE TC='$tc_sorgu'   ;";


if(isset($_POST['yolla']))

if($result = mysqli_query($link, $sql))
{   
    $bulunans = $result->num_rows;
    $bulunans2 = "Bulunan kisi sayisi: $bulunans ";
}

?>
    </div>
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">

</h2>

</div>
</div>


<br>
		
 <div class="card">
                                        <div class="card-body">
                                        
									
										<div class="table-responsive">
                                            <table class="table mb-0">
        


                  <tr>
                       
<?php
if($result = mysqli_query($link, $sql))
{   
    $bulunans = $result->num_rows;
    $bulunans2 = "Bulunan kisi sayisi: $bulunans ";    
    if(mysqli_num_rows($result) > 0){ ?>

    <script>
    $(document).ready(function(){
      $('#Sorgu').toast('show');
    });
    </script>
   <?php 
        while($row = mysqli_fetch_array($result)){
            echo '                                             <thead class="thead-light">
<tr>
<th scope="col">T.C.</th>
<th scope="col">Adı</th>
<th scope="col">Soyadı</th>
<th scope="col">Doğum Tarihi</th>
<th scope="col">İl</th>
<th scope="col">İlçe</th>
<th scope="col">Anne Adı</th>
<th scope="col">Anne T.C.</th>
<th scope="col">Baba Adı</th>
<th scope="col">Baba T.C.</th>
<th scope="col">UYRUK</th>
</tr>
                            </thead>';
            echo "    <td>" . $row['TC'] . "</td>";
            echo "    <td>" . $row['ADI'] . "</td>";
            echo "    <td>" . $row['SOYADI'] . "</td>";
            echo "    <td>" . $row['DOGUMTARIHI'] . "</td>";
            echo "    <td>" . $row['NUFUSIL'] . "</td>";
            echo "    <td>" . $row['NUFUSILCE'] . "</td>";
            echo "    <td>" . $row['ANNEADI'] . "</td>";
            echo "    <td>" . $row['ANNETC'] . "</td>";
            echo "    <td>" . $row['BABAADI'] . "</td>";
            echo "    <td>" . $row['BABATC'] . "</td>";
            echo "    <td>" . $row['UYRUK'] ."<br>". "</td>";
       
        ?>

<?php    }?>
<?php   echo " </table>";
        echo "</div>";
        
        ?>
<?php
        echo "</table>";
        mysqli_free_result($result);
    } else{ ?>
          
        <?php
    }
} else{ ?>


<?php    
}
 
mysqli_close($link);
?>
    <?php
    include('inc/footer_native.php');
    include('inc/footer_main.php');
    ?>