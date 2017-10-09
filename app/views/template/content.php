<?php
	$filename = "app/views/$m/$p.php";
?>
<div id="page-wrapper">
    <div class="container-fluid">
      	
    	<?php
    		if(file_exists($filename)){
                if($p == "list"){
                    include_once("app/views/template/css/list_css.php");
                    include_once("app/views/template/js/list_js.php");
                }
                else if ($p == "view"){
                    include_once("app/views/template/css/view_css.php");
                    include_once("app/views/template/js/view_js.php");
                }
                include_once($filename);
            }
        	else include_once("app/views/beranda/dashboard.php");
    	?>
        <!-- Custom CSS -->
        <link href="<?= base_url."assets/css/style.css"; ?>" rel="stylesheet">
        <link href="<?= base_url."assets/css/colors/blue.css"; ?>" id="theme" rel="stylesheet">

    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 
    	<strong>Sistem Informasi SCM SHB</strong> | Copyright &copy; <?php echo date("Y"); ?> <a href="javascript:;">PT. SARHIF BROTHERS</a>. All rights reserved | Powered By <a href="https://wrappixel.com/ampleadmin/" target="_blank">Ample Admin</a>
    </footer>
</div>
