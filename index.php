<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="manali.jpg" alt="manali">
    <div class="container">
        <h1>Welcome to Epik Technocravers Pvt Ltd</h1>
        <p>Enter your details and submit this form to confirm your participation in the Trip!</p>
        <form action="server.php" method="post">
            <input type="text"  name="Name" placeholder="Enter your name">
            <input type="text" name="Age" placeholder="Enter your age">
            <input type="text" name="Gender" placeholder="Enter your gender">
            <input type="text" name="Phone"placeholder="Enter your phone">
            <input type="text" name="Email"placeholder="Enter your email">
            <textarea name="Others" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
        </form>
        </div>  
    <script src="index.js">
    </script>
</body>
</html>
