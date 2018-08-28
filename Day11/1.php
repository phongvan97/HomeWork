<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    ?>
    <form name="dang-ky" action="process.php" method="post">
        <div class="form-group">
            <label for="name">Họ Tên:</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input name="pass" type="password" class="form-control" id="pwd">
        </div>
        <div class="form-group">
            <label for="Code">Code:</label>
            <input name="code" type="text" class="form-control" id="Code">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input name="phone" type="number" class="form-control" id="phone">
        </div>
        <div class="form-group">
            <label for="gt">Giới Tính:</label>
            <input type="radio" class="form-control" name="gen" id="gt" style="width: 20px;display: inline;top: 20px">
            <input type="radio" class="form-control" name="gen" style="width: 20px;display: inline;top: 20px">
        </div>
        <div class="form-group">
            <label for="check">Check:</label>
            <input type="checkbox" class="form-control" name="check">
        </div>
        <div class="form-group">
            <label for="Area">Area:</label>
            <textarea name="Area" class="form-control" id="" cols="30" rows="10"></textarea>

        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>