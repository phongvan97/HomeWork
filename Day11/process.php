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
<?php
if(isset($_REQUEST)&&!empty($_REQUEST)){
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
?>
<div class="container" style="margin: 0 auto">
    <div class="row">
        <h1>Hiiiiiiii</h1>
        <h1>THong TIn cua ban la :</h1>
        <h1> <?php echo $_REQUEST['name'] ?></h1><br>
        <h1> <?php echo $_REQUEST['pass'] ?></h1><br>
        <h1> <?php echo $_REQUEST['code'] ?></h1><br>
        <h1> <?php echo $_REQUEST['email'] ?></h1><br>
        <h1> <?php echo $_REQUEST['phone'] ?></h1><br>
        <h1> <?php echo $_REQUEST['gen'] ?></h1><br>
        <h1> <?php echo $_REQUEST['check'] ?></h1><br>
    </div>
    <?php
    }
    ?>
</div>






</body>
</html>