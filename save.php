<?php
session_start();
include 'database.php';
if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];


		$public = "-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnEUeTNycwkpJkRdUoXET
sF+BeI7tV7VvmDbzMLS+abOWlXfMA9r50d2Vrz5jckfrIpSfaxDrkmbbEl8Qeawh
gkFdpTja9TA0QBbnjkbHAqbVJBNRYlYYBPARrH7WFKRJ2sbjZ7VqZkosdlATCaqX
LlL1KR1cTObNiH1ryKaNId0zMUtBtbq4FEBWnnikdH9EQsymiM4Zw0D451pxl+za
Fc9KdFK6zvkQM2koXZZ1+2VAfp4zUwT9Xu4xrvJ3y0XFdwxKadX7GYdqrJgZoc7S
VFdXgich3LgYlUIljIYSYZQWdQCTYXjRxur+VKf1PidnpzEbTD7TYSEg1bcyurzc
GQIDAQAB
-----END PUBLIC KEY-----";

            openssl_public_encrypt ($name, $name1 , $public);
            openssl_public_encrypt ($email, $email1 , $public);
            openssl_public_encrypt ($phone, $phone1 , $public);
            openssl_public_encrypt ($city, $city1 , $public);

            $u_name= base64_encode($name1);
            $u_email= base64_encode($email1);
            $u_phone= base64_encode($phone1);
            $u_city= base64_encode($city1);
            
		$sql = 'INSERT INTO `crud`( `name`, `email`, `phone`, `city`) VALUES ("'.$u_name.'","'.$u_email.'","'.$u_phone.'","'.$u_city.'")';

		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}




if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];


		$public = "-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnEUeTNycwkpJkRdUoXET
sF+BeI7tV7VvmDbzMLS+abOWlXfMA9r50d2Vrz5jckfrIpSfaxDrkmbbEl8Qeawh
gkFdpTja9TA0QBbnjkbHAqbVJBNRYlYYBPARrH7WFKRJ2sbjZ7VqZkosdlATCaqX
LlL1KR1cTObNiH1ryKaNId0zMUtBtbq4FEBWnnikdH9EQsymiM4Zw0D451pxl+za
Fc9KdFK6zvkQM2koXZZ1+2VAfp4zUwT9Xu4xrvJ3y0XFdwxKadX7GYdqrJgZoc7S
VFdXgich3LgYlUIljIYSYZQWdQCTYXjRxur+VKf1PidnpzEbTD7TYSEg1bcyurzc
GQIDAQAB
-----END PUBLIC KEY-----";

            openssl_public_encrypt ($name, $name1 , $public);
            openssl_public_encrypt ($email, $email1 , $public);
            openssl_public_encrypt ($phone, $phone1 , $public);
            openssl_public_encrypt ($city, $city1 , $public);

            $u_name= base64_encode($name1);
            $u_email= base64_encode($email1);
            $u_phone= base64_encode($phone1);
            $u_city= base64_encode($city1);


		$sql = "UPDATE `crud` SET `name`='$u_name',`email`='$u_email',`phone`='$u_phone',`city`='$u_city' WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `crud` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM `crud` WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}


if(count($_POST)>0){

	if($_POST['type']==5){



		$private = $_POST['password'];
		$text = "hello";


		$public = "-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnEUeTNycwkpJkRdUoXET
sF+BeI7tV7VvmDbzMLS+abOWlXfMA9r50d2Vrz5jckfrIpSfaxDrkmbbEl8Qeawh
gkFdpTja9TA0QBbnjkbHAqbVJBNRYlYYBPARrH7WFKRJ2sbjZ7VqZkosdlATCaqX
LlL1KR1cTObNiH1ryKaNId0zMUtBtbq4FEBWnnikdH9EQsymiM4Zw0D451pxl+za
Fc9KdFK6zvkQM2koXZZ1+2VAfp4zUwT9Xu4xrvJ3y0XFdwxKadX7GYdqrJgZoc7S
VFdXgich3LgYlUIljIYSYZQWdQCTYXjRxur+VKf1PidnpzEbTD7TYSEg1bcyurzc
GQIDAQAB
-----END PUBLIC KEY-----";
		openssl_public_encrypt ($text, $name1 , $public);

		$u_name= base64_encode($name1);
		
		$u_name1= base64_decode($u_name);

		openssl_private_decrypt( $u_name1 , $name , $private);

		if ($name == $text) {
			$_SESSION["password"] = $private;
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
}




?>