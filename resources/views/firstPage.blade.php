
<?php

$page = " to our Page"

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
    
<h1>
    Welcome {{$page}}
</h1>
<nav>
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/second-page">Link1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/welcome-page">Link2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/third-page">Link3</a>
        </li>
        
      </ul>
</nav>

</body>
</html>

