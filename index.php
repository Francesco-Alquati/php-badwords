<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Badwords</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">PHP Badwords</h1>
            </div>
            <div class="col-12">
                <form action="./badwords.php" method="GET">
                    <div class="row gy-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="control-label">Pargrafo</label>
                                <textarea name="paragraph" id="paragraph" class="form-control" placeholder="parafrafo"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="control-label">Parola da censurare</label>
                                <input name="word" id="word" class="form-label" placeholder="parola da censurare"></input>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-small btn-primary">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>