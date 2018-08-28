<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>

<div class="container">
    <div class="row">
        <div style="height: 100px">
        </div>
    </div>
    <div class="row">
        <div style="color: red">

            <p>Bảo hiểm y tế = 1.5/100 * lương gross</p>
            <p>Bảo hiểm xã hội = 8/100 * lương gross</p>
            <p>Bảo hiểm thất nghiệp = 1/100 * lương gross</p>
            <p>Bảo hiểm = ( bảo hiểm y tế + bảo hiểm xã hội + bảo hiểm thất nghiệp)</p>
            <p>Thu nhập chịu thuế = Thu nhập gross - Bảo hiểm - Giảm trừ cá nhân 9 triệu - ( số người phụ thuộc * 3.6 triệu )</p>
            <p>Thuế thu nhập cá nhân = (Thu nhập chịu thuế * % theo khung chịu thuế)</p>
            <p>Thu nhập net = Tổng thu nhập - Bảo hiểm - Thuế thu nhập cá nhân</p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>bậc</th>
                    <th>thu nhập chịu thuế/tháng</th>
                    <th>Phần trăm tính thuế</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>nhỏ hơn hay bằng 5.000.000</td>
                    <td>5%</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>từ 5.000.000 đến 10.000.000</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>trên 10.000.000 đến 18.000.000</td>
                    <td>15%</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>trên 18.000.000 đến 32.000.000</td>
                    <td>20%</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>trên 32.000.000 đến 52.000.000</td>
                    <td>25%</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>trên 52.000.000 đến 80.000.000</td>
                    <td>30%</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>trên 80.000.000</td>
                    <td>35%</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <form name="hr" action="gross.php" method="post">
            <div class="form-group">
                <label>Thu nhập gross</label>
                <input type="text" name="gross" class="form-control" value="<?php
                if(isset($_REQUEST)&&!empty($_REQUEST))
                echo $_POST["gross"]; else echo "" ?>">

            </div>
            <div class="form-group">
                <label>Bảo hiểm y tế %</label>
                <input type="text" name="medical" class="form-control" value="1.5">
            </div>
            <div class="form-group">
                <label>Bảo hiểm xã hội %</label>
                <input type="text" name="social" class="form-control" value="8">
            </div>
            <div class="form-group">
                <label>Bảo hiểm thất nghiệp %</label>
                <input type="text" name="work" class="form-control" value="1">
            </div>
            <p>Giảm trừ gia cảnh</p>
            <div class="form-group">
                <label>Giảm trừ cá nhân 9.000.000</label>
                <input type="text" name="personal" class="form-control" value="9000000">
            </div>
            <div class="form-group">
                <label>Giảm trừ người phụ thuộc</label>
                <input type="text" name="family" class="form-control" value="3600000">
            </div>
            <div class="form-group">
                <label>Số người phụ thuộc</label>
                <input type="text" name="quantity_family" class="form-control" value="<?php
                if(isset($_REQUEST)&&!empty($_REQUEST))
                    echo $_POST["quantity_family"]; elseif(hash_equals($_POST["quantity_family"],"")) echo 0; ?>">
            </div>
            <button type="submit" name="btn_sub" value="sub" class="btn btn-default">GROSS -> NET</button>
        </form>
    </div>
    <?php
    if($_POST["gross"]<5000000)
        $perTHUE=5/100;
    elseif ($_POST["gross"]<10000000)
        $perTHUE=10/100;
    elseif ($_POST["gross"]<18000000)
        $perTHUE=15/100;
    elseif ($_POST["gross"]<32000000)
        $perTHUE=20/100;
    elseif ($_POST["gross"]<52000000)
        $perTHUE=25/100;
    elseif ($_POST["gross"]<80000000)
        $perTHUE=30/100;
    else
        $perTHUE=35/100;

    $BHYT=1.5/100*$_POST["gross"];
    $BHXH=8/100*$_POST["gross"];
    $BHTN=1/100*$_POST["gross"];
    $BH=$BHTN+$BHXH+$BHYT;
    $TNCT=$_POST["gross"]-$BH-9000000-$_POST["quantity_family"]*3600000;
    $THUE=$TNCT*$perTHUE;
    $val_net=$_POST["gross"]-$BH-$THUE;
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    ?>
    <div class="row">
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">Lương net :<?php echo $val_net?> </p>
        <h5>Tổng Lương : <?php echo $_POST["gross"]?></h5>
        <h5>Bảo Hiểm Y tế: <?php echo $BHYT?></h5>
        <h5>Bảo Hiểm Xã Hội: <?php echo $BHXH?></h5>
        <h5>Bảo Hiểm Thất Nghiệp: <?php echo $BHTN?></h5>
        <h5>Bảo Hiểm: <?php echo $BH?></h5>
        <h5>Thu Nhập Chịu Thuế: <?php echo $TNCT?></h5>
        <h5>Tỷ lệ Thuế  <?php echo $perTHUE?></h5>
        <h5>Thuế <?php echo $THUE?></h5>

    </div>
</div>


</body>
</html>