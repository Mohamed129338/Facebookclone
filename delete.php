<?php 
$con = mysqli_connect('localhost','root','','facebook_clone');
$phoneoremail = $_POST['phoneoremail']
$check = mysquil_query($con,"DELETE FROM userdata WHERE phoneoremail")

if ($check>0) {
    header("Location:http://localhostfacebookclone/mainpage.html")
}