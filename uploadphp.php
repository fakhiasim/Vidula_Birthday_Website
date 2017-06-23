<?php
include ("dbh.php");
date_default_timezone_set('Asia/Kolkata');

	if(isset($_POST['submit']))
	{

		$tabname=$_POST['tabname'];
				
		$image = $_FILES['image'];

		
		$image_name = $_FILES['image']['name'];
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_error = $_FILES['image']['error'];
		$image_tmp = $_FILES['image']['tmp_name'];
	

		$fileExt = explode('.', $image_name);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array ('jpg', 'jpeg', 'png', 'gif');

		if (in_array($fileActualExt, $allowed)) {
				if ($image_error === 0) {
					if ($image_size < 1000000) {
						$fileNewName = uniqid('', true).".".$fileActualExt;
						$fileDest = 'images/'.$fileNewName;
						move_uploaded_file($image_tmp, $fileDest);
					}else{
						echo "Your file is too big!";

					}
				}else{
					echo "there was an error uplaoding your file";
				}
			
			}else
			{
			echo "You can't Upload files of this type.";
		}




		echo "$tabname<BR>";
		echo "$image_name<BR>";
		
		//insert the data
		//first create insert query
		$insert = "INSERT INTO `gallery` (`tabname`, `img`) VALUES ( '$tabname', '$fileNewName')";
	
		$query = mysqli_query($conn,$insert);
		if($query)
		{
			echo "Added INTO DB";

		}else
			{
				echo "Error while inserting.";

			}

	
	}

?>