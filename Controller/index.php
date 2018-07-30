<?php 
    include('../Model/database.php');
	$action=filter_input(INPUT_POST,'action');
	if (empty($action)){
		$action=filter_input(INPUT_GET,'action');
		if (empty($action)){
			$action='form_login';
		}
	}

  switch ($action) {
  	case 'form_login':
  		include('../View/login.php');
  		break;
  	case 'check_login':
  		$email=filter_input(INPUT_POST, 'email');
  		$password=filter_input(INPUT_POST, 'password');
  		$users=get_users();

  		if(check_user($users,$email,$password)){

  			include('../View/list_user.php');
  		}
  		else{
  			include('../View/login.php');
  			echo "Error user or pass";
  		}
  		break;

  	case 'form_add_user':
  		include('../View/add_user.php');
  		break;
  	case 'add_user':
  		$email=filter_input(INPUT_POST, 'email');
  		$password=filter_input(INPUT_POST, 'password');
  		$firstname=filter_input(INPUT_POST, 'firstname');
  		$lastname=filter_input(INPUT_POST, 'lastname');
  		$phone=filter_input(INPUT_POST, 'phone');
  		add_user($email,$password,$firstname,$lastname,$phone);
  		$users=get_users();
  		include('../View/list_user.php');
  		break;

    case 'edit_user':
      $ID=filter_input(INPUT_POST, 'ID');
      $us=get_user_by_ID($ID);
      include('../View/edit_user.php');
      break;  

     case 'update_user':
      $ID=filter_input(INPUT_POST, 'ID');
      $email=filter_input(INPUT_POST, 'email');
      $password=filter_input(INPUT_POST, 'password');
      $firstname=filter_input(INPUT_POST, 'firstname');
      $lastname=filter_input(INPUT_POST, 'lastname');
      $phone=filter_input(INPUT_POST, 'phone');
      // call function update_user

      update_user($ID,$email,$password,$firstname,$lastname,$phone);
      $users=get_users();
      include('../View/list_user.php');
      break;

      case 'delete_user':
        $ID=filter_input(INPUT_POST, 'ID');
        delete_user($ID);
        $users=get_users();
        include('../View/list_user.php');
      break;

      case 'search_info':
          $search_value= filter_input(INPUT_POST, 'info_search');
          if (empty($search_value)){
            $users=get_users();
          }
          else {
               $users=search_information($search_value);
             };

          include('../View/list_user.php');

          break;


  	default:
  		# code...
  		break;
  }


?>