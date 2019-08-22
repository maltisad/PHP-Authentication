
 <?php  
include 'config.php';

 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["firstname"])&&empty($_POST["lastname"])&&empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("All Fields are required")</script>';  
      }  
      else  
      {  
        
           $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);  
           $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);  
           $username = mysqli_real_escape_string($conn, $_POST["username"]);  
           $pass = mysqli_real_escape_string($conn, $_POST["password"]); 
          
           $query = "INSERT INTO rl1 (firstname,lastname,username, password) VALUES('$firstname','$lastname','$username', '$pass')"; 

           if(mysqli_query($conn, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  

if(isset($_POST['Login'])){
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $usertype=$_POST['usertype'];

  $usertype=$_POST['usertype'];
  $query="SELECT username,password FROM rl1 WHERE username='".$user."' and password='".$pass."'and usertype='".$usertype."'";
  $result=mysqli_query($conn,$query);/*qekjo qysh pe kuptoj un i bjen qe e kontrollon qet   queryn a osht i sakt me lidhjen(databazen) tonde*/
  $count = mysqli_num_rows($result); /*The mysqli_num_rows() function is an inbuilt function in PHP which is used to return the number of rows present in the result set.*/
  


  if($count==1){
     if($usertype=="admin"){
    header("location:admin.php");
    }
    else{
      header("location:user.php");
    }
  }else{
    echo 'Incorrect Username or Password';
  }

}
 ?>  