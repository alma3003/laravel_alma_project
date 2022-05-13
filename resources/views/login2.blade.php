<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
<div class="center">
    <h1>Login</h1>
    <form action="{{route('check')}}" method="post">
        @if(Session::get('fail'))
            <div class="alert alert-success">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <input type="text" id="email" name="email" required placeholder="Email" value="{{old('email')}}">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
        <br> <br>
        <input type="password" id="psw" name="psw" required placeholder="Password" value="{{old('psw')}}" >
        <span class="text-danger">@error('psw'){{ $message }} @enderror</span>
        <br><br>
        <input type="submit" value="Login"/>
        <div class="signup_link">Not a member? <a  href="{{url('/login')}}" {{config('app.name','main')}} >Register now!</a>
        </div>
    </form>
</div>

</body>
</html>
