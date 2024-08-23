<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CODE01</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" name="image">
                    <br><br>
                    <button class="btn btn-default" type="submit">Submit</button>
                </div>
            </form>
            <?php
                $image = isset($_POST['image']);

                if (basename($_FILES['image']['name']) != '') {
                    $full_path = $_SERVER['DOCUMENT_ROOT'].'/uploads/' . basename($_FILES['image']['name']);
                    $rel_path = '/uploads/' . basename($_FILES['image']['name']);
                    if (!move_uploaded_file($_FILES['image']['tmp_name'], $full_path)) {
                        echo "<b><font color='red'>ERROR</font></b>";
                    } else {
                        echo "<b><font color='green'>GOOD</font></b>";
                    }
                } else {
                    echo "Error no image";
                }
            ?>
        </div>
    </div>
</body>
</html>
