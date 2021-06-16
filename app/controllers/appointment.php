<?php
	// table name
	$tableName = "appointment";
	if (isset($_POST['meet'])) {


		// removing the button variable
		unset($_POST['meet']);

		// post variable to local variable
		$username = $_POST['name'];
	    $emailAddress = $_POST['email'];
	    $phoneNumber = $_POST['phoneNumber']; 
	    $purpose = $_POST['purpose'];
	    $aboutProject = $_POST['message'];

	    $data=[
	    	'name'=>$username,
	    	'email' => $emailAddress,
	    	'phone_number'=> $phoneNumber,
	    	'purpose' => $purpose,
	    	'description' => $aboutProject
	    ];

	    // insert new information to database
	    $userId = create($tableName, $data);
	    
	    // make the user_id with id and name
	    $unqiueId = "app_". $userId."_".date("d")."_". time();

	    // update the user_id field
	    $data = [
	    	'user_id' => $unqiueId
	    ];
	     $updated = update($tableName, $userId, $data);
	     
		// give feedback
		feedback($emailAddress, $username);

		// send mail to kit user
		$to = "jambone.james82@gmail.com";
		$subject = "Potencial Client";
		$body = "From: " . $username. " \r\n";
		$body .= "Email: ". $emailAddress. " \r\n";
		$body .= "Phone Number: ". $phoneNumber . " \r\n";
		$body .= "User ID" . $unqiueId . " \r\n";
		$body .= "Messgage: wants to an appointment";

		// send the mail 
		mail($to, $subject, $body);

		// back to index page
		redirect("index.php?appointmentRes=$username");
	}
?>