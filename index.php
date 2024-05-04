<?php 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--/ Bootstrap  -->
    <title>PHP Strong Password Generator</title>
</head>
<body class="bg-primary">
    <header>
        <div class="container">
            <h1 class="text-center text-secondary">Strong Password Generator</h1>
            <h2 class="text-center text-white">Genera una password sicura</h2>
         </div>
    </header>
    <main>
        <div class="container">
            <div class="row bg-light py-3 rounded ">
                <form>
                    <div class="row mb-3">
                        <label for="passwLength" class="col-sm-2 col-form-label">Lunghezza Password</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="passwLength" name="passwLength">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>