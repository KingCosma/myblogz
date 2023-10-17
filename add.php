<?php 
include("dbconnect.php");
$set = false;
if(isset($_POST["submit"])){
    $set = true;
} else {
    $set = false;
}
$ok = false;
if($set){
    if(!empty($_POST["name"])){
        $ok = true;
    }else{
        $ok = false;
    }
    if(!empty($_POST["content"])){
        $ok = true;
    }
        else{
        $ok = false;
    }
    
    if(!empty($_POST["title"])){
        $ok = true;
    }
    else{
        $ok = false;
    }
    $scr = "false";
    if($ok){
        $name = mysqli_real_escape_string($db, htmlspecialchars($_POST["name"]));
        $title = mysqli_real_escape_string($db, htmlspecialchars($_POST["title"]));
        $content = mysqli_real_escape_string($db, htmlspecialchars($_POST["content"]));
        $sql = "INSERT INTO myblogz(name,title,content) VALUES('$name', '$title', '$content')";
        mysqli_query($db, $sql);
        $scr = "true";
        header('Location: index.php');
    }
    mysqli_close($db);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://flatblu.vercel.app/flatblu.css">
    <link rel="stylesheet" href="https://cryogen.vercel.app/cryo.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Blog</title>
</head>

<body class="std">
    <header id="hdr" class="hdr">New Blog
    </header>
    <form action="add.php" method="POST">
        <input id="inhdr" onkeyup="hdr()" name="title" placeholder="title" class="txtin2" required>
        <input name="name" placeholder="author name....." class="txtin2" required>
        <div style="height: 100%;"><textarea required name="content" placeholder="Edit your blog..." style="width: 45%; height: calc(100vh - 110px);" onkeyup="update()" id="gg" class="txtin2"></textarea>
            <iframe style="width: 45%; height: calc(100vh - 105px); border: 1px solid black; padding: 4px 8px 4px 8px; border-radius: 2px;" id="frame"></iframe>
        </div>
        <input type="submit" name="submit" value="submit" id="submit" class="btn3">


    </form>
    <script src="https://cdn.jsdelivr.net/npm/showdown@2.0.3/dist/showdown.min.js"></script>


    <script src='preview.js'></script>
</body>

</html>
