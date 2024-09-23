<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- in modo statico -->
                Hello World.
            </div>
            <div class="col-12">
                <!-- modo dinamico -->
                {{ $title }}
            </div>
            <div class="col-12">
                <!-- visualizzato il messaggio con il metodo compact -->
              {{ $message }}
            </div>
        </div>
    </div>
</body>
</html>