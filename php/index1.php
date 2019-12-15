<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <form action="contact.php" method="post">
        <h1>Contact Form</h1>

        <label for="name">Name*</label>
        <input type="text" id="name" name="name" placeholder="Name">
        <!-- labe for="name" = input id="name ) can help when browser click 
        the label name and related input area will be selected   !!!super important-->

        <label for="email">Email*</label>
        <input type="email" id="email" name="email" placeholder="Email">

        <label for="phone">Phone (option)</label>
        <input type="text" id="phone" name="phone" placeholder="Phone">

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Subject">

        <label for="message">Message</label>
        <textarea id="message" placeholder="Please type your message" name="message"></textarea>

        <button type="submit">Submit</button>

    
    </form>
</body>
</html>