<h2 style="text-align: center">Sign in to your account</h2>
<form method="post">
    <label for="email">Email: <input type="email" name="email" id="email"></label><br><br>
    <label for="password">Password: <input type="password" name="password" id="password"></label><br><br>
    <input type="button" name="button" value="Submit" onclick="myFunc()">
</form>
<div id="regis"></div>

</div>

<script>
    function myFunc() {
        document.getElementById('regis').innerHTML = '<h2 style="text-align: center">First register please</h2>';

    }
</script>