<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div id="app">

        <v-app>
            <v-container class="p-5">
                <login-component></login-component>
            </v-container>
        </v-app>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
