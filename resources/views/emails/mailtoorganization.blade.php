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
            <p>Անուն Ազգանուն: {{ $details['fullname'] }},</p>
            <p>Հյուրերի քանակ: {{ $details['number_guest'] }},</p>
            <p>Հաղորդագրություն: {{ $details['message'] }},</p>
            <p>Պատասխան: {{ $details['coming_rezult'] }},</p>

        </div>

    </div>

</body>
</html>
