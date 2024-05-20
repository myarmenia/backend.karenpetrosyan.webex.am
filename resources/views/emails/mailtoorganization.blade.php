<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <div class="message">
            <p>Full name: {{ $details['fullname'] }},</p>
            <p>Number of guests: {{ $details['number_guest'] }},</p>
            <p>Messages: {{ $details['message'] }},</p>
            <p>Coming result: {{ $details['coming_rezult'] }},</p>

        </div>

    </div>

</body>
</html>
