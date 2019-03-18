<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
*{
    margin:0px;
    padding:0px;
}
body {
    background:#333;
    color:#fff;

}

.wrapper .contact-1 h2 {
    text-align:center;
    padding:10px;
    color:rgb(198, 41, 41);
}

input[type="text"]
{
    width:100%;
    padding:15px;
    margin:2px;
    border-radius:4px;
}

select {
    padding:15px;
    width:100%;
    margin:2px;
    border-radius:4px;
}


textarea {
    padding:50px;
    width:100%;
    margin:2px;
    border-radius:4px;
}

input[type="submit"] {
    padding:16px;
    margin:15px;
    color:black;
    background:rgb(168, 41, 41);
    border:0px;
    float:right;
}
</style>
<body>
    <div class="wrapper">
        <div class="contact-1">
            <h2>CONTACT ME</h2>
            <form class="container">
                <label>First Name:</label><br>
                <input type="text" name="box1" placeholder="Your name..."><br><br>
                <label>Last Name:</label><br>
                <input type="text" name="box1" placeholder="Your last name..."><br><br>
                <label>Country:</label><br>
                    <select>
                        <option value="0">Korea</option>
                        <option value="1">India</option>
                        <option value="2">America</option>
                        <option value="3">Australia</option>
                    </select><br><br>
                <label>Subject:</label><br>
                <textarea></textarea>
                <input type="submit" name="submit" value="Click Me"/>

            </form>
        </div>
    </div>
    
</body>
</html>