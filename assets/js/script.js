$(document).ready(function(){
	$('#submit').on('click', function(){
		var userName = $('#user').val();
		var email = $('#email').val();
		var mobile = $('#mobile').val();
		var password = $('#password').val();
		
		if(userName == '' || email == '' || mobile == '' || password == ''){
			alert("Please complete the required field!");
		}else{
			$.post('save.php', {name: userName, email: email, mobile: mobile, password: password}, function(data){
				alert(data);
				$('#user').val('');
				$('#email').val('');
				$('#mobile').val('');
				$('#password').val('');
			});
		}
	})
});