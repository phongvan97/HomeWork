<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


</head>
<body>
<div class="container">
    <form name="myform" action="bank.php" method="post" class="">
        Tiền Vay:(Đ)<input name="tien" type="text" class="form-control" width="500px" value="<?php echo isset($_POST['tien'])?$_POST['tien']:10000000?>">
        Lãi suất:(%)<input name="lai" type="text" class="form-control" width="500px" value="<?php isset($_POST['lai'])?$_POST['lai']:10 ?>">
        Tháng Vay:(Tháng) <input name="thang" type="text" class="form-control" width="500px" value="<?php isset($_POST['thang'])?$_POST['thang']:12 ?>">
        <button name="btn_sub" type="submit" class="btn btn-default" value="sub">Check !!!</button>
    </form>
    <table class="table table-bordered">

        <thead>
        <tr>
            <th>Kỳ hạn</th>
            <th>Lãi phải trả</th>
            <th>Gốc phải trả</th>
            <th>Số tiền phải trả</th>
            <th>Số tiền còn lại</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $thang = $_POST['thang'];
        $lai = $_POST['lai']/100;
        $TongTien = $_POST['tien'];
        $TienGoc = $TongTien / $_POST['thang'];
        $tienthang1=$TienGoc+$TongTien * $lai / 12;
        $tonglai=0;
        for ($i = 0; $i < $thang; $i++) {
            $TienLai = $TongTien * $lai / 12;
            $tonglai+=$TienLai;
            $TienPhaitra = $TienLai + $TienGoc;
            $TongTien -= $TienGoc;
            echo "<tr>";
            echo "<td>".($i+1)."</td>";
            echo "<td>".(int)$TienLai."</td>";
            echo "<td>".(int)$TienGoc."</td>";
            echo "<td>".(int)$TienPhaitra."</td>";
            echo "<td>".(int)$TongTien."</td>";
            echo "<tr>";

//            echo (int)$TienLai . "-----" . (int)$TienGoc . "------" . (int)$TienPhaitra . "-----" . (int)$TongTien . "<br>";
        }
        echo "<h2>"."Số Tiền Trả tháng đầu : ".(int)$tienthang1." VND</h2>";
        echo "<h2>"."Số Tiền Lãi Phải Trả : ".(int)$tonglai." VND</h2>";
        echo "<h2>"."Số Tiền Gốc Phải Trả : ".((int)$tonglai+(int)$_POST['tien'])." VND</h2>";

        ?>
        </tbody>
    </table>
</div>
</body>
</html>
