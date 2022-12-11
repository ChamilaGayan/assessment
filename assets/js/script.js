//Submit Data
$(document).ready(function(){
	$('#submit').on('click', function(){
		var userName = $('#user').val();
		var email = $('#email').val();
		var mobile = $('#mobile').val();
		var password = $('#password').val();
		
		if(userName == ''){
			alert("Please enter the name field!");
		}else if(email == ''){
			alert("Please enter the email field!");
		}else if(mobile == ''){
			alert("Please enter the mobile field!");
		}else if(password == ''){
			alert("Please enter the password field!");
		}
		
		else{
			$.post('save.php', {name: userName, email: email, mobile: mobile, password: password}, function(data){
				alert(data);
				console.log(data);
				$('#user').val('');
				$('#email').val('');
				$('#mobile').val('');
				$('#password').val('');
			});
			text = "Data successfully added!";
		}
		document.getElementById("status").innerHTML = text;
	})
});


// Get Data
$(function(){ 

	$("#getusers").on('click', function(){ 
  
	$.ajax({ 
  
	  method: "GET", 
	  
	  url: "getdata.php",
  
	}).done(function( data ) { 
  
	  var result= $.parseJSON(data); 
  
	  var string='<table width="100%"><tr> <th>Name</th><th>Email</th> <th>Mobile</th><tr>';
  
	 /* from result create a string of data and append to the div */
	
	  $.each( result, function( key, value ) { 
		
		string += "<tr> <td>"+value['name'] + "</td><td>"+value['email']+'</td>  \
				  <td>'+value['mobile']+"</td> </tr>"; 
			}); 
  
		   string += '</table>'; 
  
		$("#records").html(string); 
	 }); 
  }); 
  }); 