<?php
include("dbconnect.php");
$sql    = 'SELECT * FROM myblogz ORDER BY date_created DESC';
$result = mysqli_query($db, $sql);
$data   = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        a:active h2,
        h5 {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="https://flatblu.vercel.app/flatblu.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlogz</title>
</head>

<body>
    <header class="hdr">My Blogz</header>
    <div style="text-align: right;"><a href="add.php"><button class="btn1">
                Add
            </button></a></div>
    <?php foreach ($data as $item){ ?>
    <a class="anc" href="view.php?id=<?php echo $item['id']; ?>">
        <div class="btn2">
            <h3>
                <?php echo $item['title']; ?>
            </h3>
            <h5 class="std" style="text-align: right;">
                -<?php echo $item['name']; ?>
            </h5>
        </div>
    </a>
    <?php } ?>
</body>

</html>
