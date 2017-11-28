<h2 style="text-align: center">Register on the website</h2>

<form method="post"">
<label for="name">Name: <input type="text" name="name" id="name"></label>&nbsp;<span class="error"
                                                                                     id="error_name"></span><br><br>
<label for="email">Email: <input type="email" name="email" id="email"></label>&nbsp;<span class="error"
                                                                                          id="error_email"></span><br>
<br>
<label for="phone">Phone: <input type="text" name="Phone" id="phone"></label>&nbsp;<span class="error"
                                                                                         id="error_phone"></span><br>
<br>
<label for="password">Password: <input type="password" name="password" id="password"></label>&nbsp;<span class="error"
                                                                                                         id="error_password"></span>
<br><br>
<label for="confirm_password">Confirm password: <input type="password" name="confirm_password"
                                                       id="confirm_password"></label>&nbsp;<span class="error"
                                                                                                 id="error_password_confirm"></span>
<br><br>
<input type="button" name="button" value="Submit" onclick="myFunction()">
<div id="register"></div>
</form>

<script>
    function myFunction() {

        var name = document.getElementsByName('name')[0].value;
        var email = document.getElementsByName('email')[0].value;
        var phone = document.getElementsByName('Phone')[0].value;
        var password = document.getElementsByName('password')[0].value;
        var confirm_password = document.getElementsByName('confirm_password')[0].value;


        if (name === '') {
            document.getElementById('error_name').innerHTML = 'Enter you name plz';
        } else {
            document.getElementById('error_name').innerHTML = '';
        }

        if (email === '') {
            document.getElementById('error_email').innerHTML = 'Enter you email plz';
        } else {
            document.getElementById('error_email').innerHTML = '';
        }

        if (phone === '') {
            document.getElementById('error_phone').innerHTML = 'Enter you phone plz';
        } else {
            document.getElementById('error_phone').innerHTML = '';
        }

        if (password === '') {
            document.getElementById('error_password').innerHTML = 'Enter you password plz';
        } else {
            document.getElementById('error_password').innerHTML = '';
        }
        if (password !== confirm_password) {
            document.getElementById('error_password_confirm').innerHTML = 'Your password does not match';
        } else {
            document.getElementById('error_password_confirm').innerHTML = '';
        }


        document.getElementById('register').innerHTML = '<h2 style="text-align: center">This user already exists</h2>';
    }


</script>