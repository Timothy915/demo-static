<?php
//include("config.php");
if(isset($_GET['submit']))
{   
    $id = $_GET['id'];
	$name = $_GET['name'];
    $username = $_GET['username']; 
	$password = $_GET['password'];
	$result = mysqli_query($mysqli,"INSERT  INTO  users VALUES('','$name','$username','$password')");
	if($result)
	{
		echo "Registration Successfully";
	}
	else{
		echo "failed:";
	}
    
  
}
?>
<!doctype html>
<html>
    <head>

    <style> 
input[type=text] {
  width: 25%;
  padding: 9px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}

input[type=text]:focus {
  background-color: lightblue;
}
input[type=date] {
  width: 25%;
  padding: 7px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}
input[type=date]:focus {
  background-color: lightblue;
  }
  input[type=email] {
  width: 25%;
  padding: 9px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}
input[type=email]:focus {
  background-color: lightblue;
  }
  
  input[type=Number] {
  width: 25%;
  padding: 9px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}
input[type=Number]:focus {
  background-color: lightblue;
  
 }
 input[type=password] {
  width: 25%;
  padding: 9px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}
input[type=password]:focus {
  background-color: lightblue;
  
  }
  

input[type=submit] {
  width: 10%;
  padding: 10px;
  margin: 5px 0;
  box-sizing: border-box;
  border: 2px solid #000000;
  outline: none;
   background-color: blue;
   color:white;
    
}
input[type=submit]:focus {
    background-color: green;
}

 input[type=radio] {
  width: 5%;

  margin: 5px 0;

 
}

</style>

</head>
<body>
<center>
<form action="" method="post">
<div>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="id" /> <br>
            </div>  
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="name" /> <br>
            </div>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" /> <br>
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/> <br>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</center>
    </body>
</html>