<?php
include("dbconnect.php");
$sql    = "SELECT * FROM myblogz WHERE id = {$_GET['id']}";
$result = mysqli_query($db, $sql);
$data   = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($db);
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="https://flatblu.vercel.app/flatblu.css">
    <link rel="stylesheet" href="code.css">
</head>

<body style="font-family: 'Noto Sans', sans-serif;">
    <header class="hdr"><?php echo $data['title']; ?></header>
    <div id="content"><?php echo $data['content']; ?></div>
    <br><br>
    <footer style="text-align: right;"><?php echo "- {$data['name']}"; ?></footer>
    <script src="https://cdn.jsdelivr.net/npm/showdown@2.0.3/dist/showdown.min.js"></script>
    <script src="script.js" defer></script>
</body>

</html>
