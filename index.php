<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <header>
            <div class="container">
                <nav>
                    LOGO
                </nav>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div v-for="disc in discs" class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"> {{ disc.title }} </h3>
                                <h3 class="card-subtitle"> {{ disc.author}} </h3>
                                <h3 class="card-text"> {{disc.year}} </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>