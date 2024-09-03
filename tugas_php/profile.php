<!Doctype html>
<html>
    <head>
        <title>Profile nama</title>
        <style>
            *{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-decoration: none;
    
}
header{
    border: blue solid ;
    background-color: blue;
    margin: -10px;
    color: white;
}
html {
   background-image: linear-gradient(to right , rgb(101, 101, 162) , rgb(61, 174, 174));
}
img{
    border-radius: 500px;
    border-style: solid;
    
}
.Tampilan{
    margin-top: 15px;
    margin-left: 110px;
    margin-right: 110px;
background-image: linear-gradient(to right, pink , white);
font-weight: 500;
border: solid black 5px;
text-align: justify;
text-justify: inter-word;


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
</head>
<body>
    <header>
        <h1><center>FACENOOK</h1>
</header>
<div class = "sidebar">
    <h2>FACENOOK</h2>
    <h3><a href = "index.php">Home</a></h3>
    <h3><a href = "#">Profile</a></h3>
</div>
    <div class = "Tampilan">
        
    <h1><center>Profile Nama : </h1>
    <h1><center><img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3ZsJ_-wh-pIJV2hEL92vKyS07J3Hfp1USqA&s"></h1>

<?php
#<?php sebagai pemulai bahasa pemograman berjenis PHP, 

$nama = "Devacetta Kautsar Danendra";
$umur = "16";
$sekolah = "SMKN 2 Bandung";
$cita_cita = "Polisi , IT Programmer , Game development , Undercover agent , kapal lawd";
#$nama , $umur , $sekolah , $cita_cita sebagai variabel karena menggunakan tanda dollar $ . Setiap satu baris sudah selesai dikerjakan, jangan lupa untuk menggunakan titik koma ; untuk mengakhiri perintah baris itu tersebut.

echo "<h2>Nama = $nama <br>";
echo "Umur = $umur <br>";
echo "Sekolah = $sekolah <br>";
echo "Cita-cita = $cita_cita";
#echo untuk mengeprint sebuah kalimat di tampilan web
?> 
</div>
</body>
</html>