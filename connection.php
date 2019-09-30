<?php
$servername = 'localhost';
$username = 'vikram';
$database = 'vh_auctionproject';
$password = 'vikram1234';

// Main web images directory
$web_img_dir = 'web_images/';

// Following is the images for 1 apartment
// $dir = 'web_images/Apartments/isec_apartment/';

$dir =  'web_images/';

//Creating a connection object
$conn = new mysqli($servername,$username,$password,$database);

if($conn){
    echo "Connection was successful.";


    $sql = "select * from producttbl A
    inner join usertbl B on B.userid = A.sellerid
    inner join producttypetbl C on C.ptypeid = A.ptypeid;";

    $results = mysqli_query($conn,$sql);


    foreach($results as $row){

        // $val = $dir . $row["imgsrc"];
        // echo "".$val."</br>";
        $propertyFolder = str_replace(' ','_',strtolower($row['pname']));
        $ptypeFolder = $row['typename'];
        echo $propertyFolder . "</br>";
        echo $ptypeFolder . "</br>";

        $dir =  'web_images/'.$ptypeFolder."/".$propertyFolder."/";

        $getProImg = "SELECT * FROM `productimgtbl` WHERE pid = ".$row['pid'].";";

        $propertyPhotos = mysqli_query($conn,$getProImg);

        foreach($propertyPhotos as $photos){
            $img = '<img width="400" height="400" src="'.$dir.$photos['imgsrc'].'">';

            // echo $dir.$photos['imgsrc'];
            echo $img;
        }

        // echo '<img src="$val" alt="">';       
        // echo ""
        // echo "<img src=\"$val\" alt=\"\">"
    }
}else{
    echo "Connection was not successful.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!-- C:\xampp1\htdocs\1821003\web\web_images\Apartments\isec_apartment\1.jpg -->
<!-- <img src="C:/xampp1/htdocs/1821003/web/web_images/Apartments/isec_apartment/temp.jpg" alt=""> -->

<img src='web_images/temp.jpg'>

<!-- <h1>Hello heading</h1> -->



</body>
</html>