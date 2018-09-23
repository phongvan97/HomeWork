<?php require_once("defind.php");
?>
<?php require_once(admin_path."partical/header.php") ?>
    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">

                <?php require(admin_path."partical/header-main.php") ?>
                <?php if (isset($_GET['page'])) {
                    $page = $_GET['page'].".php";
                    $page_path=admin_path."pages/".$page;
                    $check_path=file_exists($page_path);
                    if($check_path)
                    require($page_path);
                    else
                        require(admin_path."pages/404.php");
                } else
                    require(admin_path."pages/dashboad.php") ?>
                <?php require(admin_path."partical/copyright.php") ?>
            </div>
        </div>
        <?php require(admin_path."partical/sidebar.php") ?>
        <div class="clearfix"></div>
    </div>
    <!--slide bar menu end here-->
    <!-- mother grid end here-->
<?php require_once(admin_path."partical/footer.php") ?>