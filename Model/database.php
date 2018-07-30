
<?php

$host='localhost';
$username='root';
$password='';
$dbname='user_db';

@ $db= new mysqli($host,$username,$password,$dbname);

// $conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($db, 'UTF8');
// Kiem tra loi
$connection_error= $db->connect_error;
if ($connection_error !=null){
	echo "Error connecting to Database $connection_error";
	exit();
}

//Get all User

function get_users(){
	global $db;
	$query='SELECT * FROM users';
	$result=$db->query($query);
	if ($result==false){
		echo "Error database". $db->error;
	}
	$user=array();
	for($i=0; $i<$result->num_rows; $i++){
		$user=$result->fetch_assoc();
		$users[]=$user;
	}
	$result->free();
	return $users;
    }
	
	


function check_user($users, $email, $password){
	$check=FALSE;
	foreach($users as $key => $value){
		if(($value['email']==$email) && ($value['password']==$password)){
			$check=TRUE;
			break;
}
	}
	return $check;
}

//Add User
function add_user($email,$password,$firstname,$lastname,$phone){
	global $db;
	$query='INSERT INTO users(email, password, firstname, lastname, phone) 
		VALUES (?,?,?,?,?)';
		$stat=$db->prepare($query); // Kiểm tra câu query đúng sai
		if ($stat==fasle){
			echo "Error database".$db->error;
		}

		$stat->bind_param("sssss",$email,$password,$firstname,$lastname,$phone); //Nạp các giá trị vào thông qua các tham số
		$success=$stat->execute(); // Chạy query
		if ($success) {
			echo "Insert successful";
		} else {
			echo "Insert error". $db->error;
		}

}
// Get user by ID
function get_user_by_ID($ID){
	global $db;
	$user_id=$db->escape_string($ID);
	$query="SELECT * FROM users WHERE ID= '$user_id' ";
	$result=$db->query($query);
	if ($result==false){
		echo "database error". $db->error;
	}
	$user=$result->fetch_assoc();
	return $user;
}
//Update user
function update_user($ID,$email,$password,$firstname,$lastname,$phone){
	global $db;
	$query='UPDATE users 
			SET email=?, password=?, firstname=?,
			lastname=?, phone=? WHERE ID=?';

	$stat=$db->prepare($query);
	if ($stat==false){
		echo "database error". $db->error;
	}

	$stat->bind_param('ssssss',$email,$password,$firstname,$lastname,$phone,$ID);
	$success=$stat->execute();
		if ($success) {
			$count=$db->affected_rows;
			$stat->close();
			return $count;
		} else{
			echo "Update error". $db->error;
		}
	


}

function delete_user($ID){
	global $db;
	$query='DELETE FROM users WHERE ID=?';
	$stat=$db->prepare($query);
	if ($stat==false){
		echo "Delete error". $db->error;
	}
	$stat->bind_param('i',$ID);
	$success=$stat->execute();
		if ($success) {
			$count=$db->affected_rows;
			$stat->close();
			return $count;
		} else{
			echo "Delete error". $db->error;
		}


	
}

function search_information($search_value){
	global $db;
	$query='SELECT * FROM users WHERE (email=?) 
		OR (firstname=? )
		OR (lastname=?) 
		OR (phone=?)';
	$stat=$db->prepare($query);
	$stat->bind_param('ssss',$search_value,$search_value,$search_value,$search_value);
	$stat->bind_result($ID,$email,$password,$firstname,$lastname,$phone,$avatar);
    $result=$stat->execute();
    
    While ($stat->fetch()){
    	$user=array('ID'=>$ID,'email'=>$email,'password'=>$password,'firstname'=>$firstname,'lastname'=>$lastname,'phone'=>$phone,'avatar'=>$avatar);
    	$users[]=$user;
    }
    return $users;

}
// C2
function search_information2($search_value){
	global $db;
	$query="SELECT * FROM users WHERE (email='$search_value') 
		OR (firstname='$search_value' )
		OR (lastname='$search_value') 
		OR (phone='$search_value')";
	$result=$db->query($query);
	if($result==fasle){
		echo "Error database".$db->error;
	}
	$user=array();
	for($i=0; $i<$result->num_rows; $i++){
		$user=$result->fetch_assoc();
		$users[]=$user;
	}
	$result->free();
	return $users;

}
?>


