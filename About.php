<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
<style>
* {
    margin:0px;
    padding:0px;
    
}
body {
    background:#eee;
}
.container {
    display:grid;
    grid-template-columns:30% 40% 20%;
    grid-gap:2em;
    padding:10px;
}
.container > div:nth-child(odd) {
    background: rgb(168, 41, 41);
    color:black;
    
}


.container div{
    background:black;
    color:#fff;
    padding:20px;
}
.container .contact h2 {
    color:rgb(198, 41, 41);
    text-align:center;
    text-decoration:underline;
    margin:10px;
}

/*
NOT WORKING..WHY??
.container .box-3 {
color:red;
    
}*/
footer {
    background: rgb(168, 41, 41);
    color:#222;
    top:240px;
    position:relative;
    padding:40px;
    text-align:center;
}

</style>
</head>
<body>
<div class="container">
<div>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>

<div class="contact">
    <h2> ABOUT PAGE</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>

<div class="box-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
</div>
</div>

<footer>
    <h4>Business,Copyright@2019</h4>
</footer>
</body>
</html>