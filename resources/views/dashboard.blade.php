<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mythology</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" title="theme" href="#">

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="https://kit.fontawesome.com/95dda36ed8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
<div class="col-md-6 col-md-offset-3">
    <h2>Dashboard</h2><hr>
    <table class="table table-hover">
        <thead>
        <th>Name</th>
        <th>Last Name</th>
        <th>Email</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$LoggedUserInfo['name']}}</td>
            <td>{{$LoggedUserInfo['lname']}}</td>
            <td>{{$LoggedUserInfo['email']}}</td>
            <td><a href="{{route('logout')}}">Log out</a></td>
        </tr>
        </tbody>
    </table>

</div>
    </div>
</div>
</body>
</html>
