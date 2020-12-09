function emptyEmail() {
	var checkBox = document.getElementById("checkButton");
	var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var email = document.forms["form"]["emailInput"].value;
		// -------------Checks if the email field is empty.
			if (email == "") {
				document.getElementById("error").innerHTML = "Email address is required";
				return false;
			}
		//---------Checks if the email is valid.
			else if(!email.match(validEmail)){
				document.getElementById("error").innerHTML = "Please provide a valid e-mail address";
				return false;
			}
		//---------Checks if the email ends with .co
			else if(email.endsWith(".co")){
				document.getElementById("error").innerHTML = "We are not accepting subscriptions from Columbia emails";
				return false;
			}
		//---------Checks if the checkbox is checked
			else if(checkBox.checked == false){
				document.getElementById("error").innerHTML = "You must accept the terms and conditions";

				return false;
			}
			else{
				document.forms["form"].submit();
				location.replace("../success.html");
				return true;
			}
		}
