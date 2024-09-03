<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <style>
            *{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-decoration: none;
    
}
html{
    background-image:linear-gradient(to right , lime , cyan);
}
header{
    border: blue solid ;
    background-color: blue;
    margin: -10px;
    color: white;
}
.sidebar{
    width: 150px;
    padding: 20px;
    margin: -10px;
    flex-shrink: 0;
    background-color: #333;
    color: white;
}
            </style>
    <body>
        <header>
            <h1><center>FACENOOK</h1>
</header>
<div class = "sidebar">
    <h2>FACENOOK</h2>
    <h3><a href = "index.php">Home</a></h3>
    <h3><a href = "#">Profile</a></h3>
</div>
    <?php
    echo "<center><h1>Selamat datang";
    echo "<h2>CONTENT";
    ?>
    </body>
