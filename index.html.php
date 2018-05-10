<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>File Upload</title>
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="alert">
        <form action="logic.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <input type="file" name="file">
                    </td>
                    <td>
                        <input type="submit" name="submit" value="Upload">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<!--Javascript for bootstrap-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>