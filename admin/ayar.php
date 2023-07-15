<?php
require_once("includes/session.php");
?>
<?php
require_once("ayarlar/baglan.php");

$ayarlar=$db->prepare("SELECT * FROM ayarlar where ayarlar_id=:id");
$ayarlar->execute(array(
        'id'=>0
      ));
$vericek=$ayarlar->fetch(PDO::FETCH_ASSOC);

require_once("includes/header.php");
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
require_once("includes/sidebar.php");
?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               <?php
            require_once("includes/navbar.php");
               ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    
                    <div class="row">

                    <div class="col-md-12">
                        <div class="col-md-4"></div>

                        <h2><b>Ayarlar</b></h2>

                        <form action="ayarlar/islem.php" method="post">

                        <label class="mt-3">Firma Adı</label>
                        <input type="text" class="form-control" name="ayarlar_firma" value="<?php echo $vericek['ayarlar_firma'] ?>">

                        <label class="mt-3">Form Başlığı</label>
                        <input type="text" class="form-control" name="ayarlar_title" value="<?php echo $vericek['ayarlar_title'] ?>">

                        <label class="mt-3">İnput İçi Yazı</label>
                        <input type="text" class="form-control" name="ayarlar_input" value="<?php echo $vericek['ayarlar_input'] ?>">

                        <label class="mt-3">Buton İçi Yazı</label>
                        <input type="text" class="form-control" name="ayarlar_btn" value="<?php echo $vericek['ayarlar_btn'] ?>">

                        <label class="mt-3">Örnek Lisans Yazı</label>
                        <input type="text" class="form-control" name="ayarlar_yazi" value="<?php echo $vericek['ayarlar_yazi'] ?>">

                        <label class="mt-3">Örnek Lisans Kodu (Bu veri kullanıcının nasıl bir şey yazacağını göstermek için kullanıcıya verilmiş bir örnektir gerçekten böyle bir kodunuz olmasına gerek yoktur.)</label>
                        <input type="text" class="form-control" name="ayarlar_ornkod" value="<?php echo $vericek['ayarlar_ornkod'] ?>">

                        <label class="mt-3">Site Footer'ı</label>
                        <input type="text" class="form-control" name="ayarlar_footer" value="<?php echo $vericek['ayarlar_footer'] ?>">

                        <label class="mt-3">Lisans Minimum Karakter Sınırı (Örneğin kodlar: "JFGAH-GFNS-SBNV-SDNF" gibiyse 19 diyebilirsiniz.)</label>
                        <input type="text" class="form-control" name="ayarlar_karakter" value="<?php echo $vericek['ayarlar_karakter'] ?>">

                    
                        <button class="btn btn-primary mt-3" name="ayarlarkaydet">KAYDET</button>

                        </form>
                    </div>

                   
                   
                    </div>
                    <?php 
            
            if(@$_GET["islem"]=="basarili"){
                echo '<div class="alert alert-success solid alert-dismissible fade show mt-5">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                <strong>Başarılı!</strong> Tebrikler, veri Güncellendi.
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>';
            }elseif(@$_GET["islem"]=="basarisiz"){
                echo ' <div class="alert alert-danger solid alert-dismissible fade show mt-5">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                <strong>Başarısız!</strong> İşlem başarısız oldu. Lütfen tekrar deneyiniz.
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>';
            }
            
            ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            require_once("includes/footer.php");
            ?>