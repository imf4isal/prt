

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contact-form">
        <form action="contact.php" id="contact-form" method="post">
            <input type="text" name="name" class="form-control" placeholder="Your Name" Required> <br>
            <input type="email" name="email" class="form-control" placeholder="Your Email" Required> <br>

                <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Message" required></textarea>

                <input type="submit" class="form-control submit" value="SEND Request">
        </form>
    </div>
</body>
</html>