<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<body>
    <input type="submit" name="submit" value="submit">


    <?php
        if(isset($_POST['submit'])){
            header("Location: #");
            echo "4280";
        }
    ?>
</body>

</html>