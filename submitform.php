  <?php  
   if ($_POST) { 
   $filename = isset($_POST['first_name'])? $_POST['first_name'] : '$_POST["first_name"]';
   header("Content-Type: application/txt"); 
   header('Content-Disposition: attachment;  filename='.$filename.'.txt'); 
   echo "Welcome, ";
   echo
   $_POST["first_name"];
   echo "\n";
   echo "Your last name is ";
   echo $_POST["last_name"];
   echo "\n";  
  echo "Your email address is ";
  echo
  $_POST["email"];
  echo "\n";
  echo "You belong to the ";
  echo
  $_POST["department"];
  echo " Department";
  echo "\n";
  echo "This is the content of your message: ";
  echo
  $_POST["message"]; 

  } else
   {
 
   ?>

   <?php } ?>
