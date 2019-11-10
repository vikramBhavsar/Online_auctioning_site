<?php

$servername = 'localhost';
$username = 'root';
$database = 'vh_auctionproject';
$password = '';

// Main web images directory
$web_img_dir = 'web_images/';

// // Following is the images for 1 apartment
// $dir = 'web_images/Apartments/isec_apartment/';


function register_user($tname,$temail,$tphone,$taddress,$tpassword){

    $insert_query = "INSERT INTO `usertbl` (`username`, `emailid`, `phone`, `address`, `isadmin`)
    VALUES ('".$tname."','".$temail."','".$tphone."','".$taddress."',0);";

    $conn = get_db_connection();

    if(mysqli_query($conn,$insert_query)){
        $userid_query = "SELECT userid FROM `usertbl` WHERE emailid = '".$temail."';";

        $useridlist = mysqli_query($conn,$userid_query);

        foreach($useridlist as $userid){
            $insert_password = "INSERT INTO `logintbl`(`userid`, `usrpass`) VALUES (".$userid['userid'].",'".$tpassword."');";
            mysqli_query($conn,$insert_password);
        }
        return 1;
    }else{
        return 0;
    }

}

function get_db_connection(){

    global $servername;
    global $username;
    global $password;
    global $database;

   return new mysqli($servername,$username,$password,$database);
}

function get_property_information_by_id($tpid){
    global $servername;
    global $username;
    global $password;
    global $database;


    $sql = "select * from producttbl A
    inner join usertbl B on B.userid = A.sellerid
    inner join producttypetbl C on C.ptypeid = A.ptypeid  where pid = ".$tpid.";";

    return mysqli_query(get_db_connection(),$sql);
}

function get_all_property_information(){
    $sql = "select * from producttbl A
    inner join usertbl B on B.userid = A.sellerid
    inner join producttypetbl C on C.ptypeid = A.ptypeid;";
    return  mysqli_query(get_db_connection(),$sql);
}

function get_property_photos_by_id($pid){
    # get property images based on pid
    $getProImg = "SELECT * FROM `productimgtbl` WHERE pid = ".$pid.";";
    
    #property images for single property
    return mysqli_query(get_db_connection(),$getProImg);
}


function get_login_details($uemailid, $upass){
    $sql = "SELECT * FROM `usertbl` a
    inner join `logintbl` b on a.userid = b.userid
    where a.emailid = '".$uemailid."' AND b.usrpass = '".$upass."';";

    return mysqli_query(get_db_connection(),$sql);
}


function put_bid_information($tpid,$tbidderid,$tprice){
    $sql = "INSERT INTO `bidtbl`(`pid`, `bidderi`, `price`) VALUES ('".$tpid."','".$tbidderid."','".$tprice."');";
    return mysqli_query(get_db_connection(),$sql);
}
// function get_price_of_property_by_id($pid){

//     $getMaxBid = 

// }




?>