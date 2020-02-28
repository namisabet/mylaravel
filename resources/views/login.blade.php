<html>
<head>
    <title>Login Form</title>
</head>

<body>

<form method="post" action="">
    @csrf
    <div>
        Username:<input type="text" name="username"><br>
    </div>
    @if($errors->has('username'))
        <p style="color:red;">{{ $errors->first('username') }}</p>
    @endif
    <div class="form-group">
        Password:<input type="password" name="password"><br>
    </div>
    @if($errors->has('password'))
        <p style="color:red;">{{ $errors->first('password') }}</p>
    @endif
    <button type="submit">Login</button>
</form>

</body>
</html>
