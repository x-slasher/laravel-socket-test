<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@vite('resources/js/app.js')
<script>
    window.addEventListener('DOMContentLoaded', function() {
        window.Echo.channel('socket-testing').listen('.MyWebSocket',(e) => {
            console.log(e);
        })
    });


</script>
</body>

</html>
