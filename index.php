    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <style>
        body{background-color: #001632;color: white;}h1{color: #808b98;}
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Strong Password Generator</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <h2>Genera una pasword sicura</h2>
            </div>
        </div>
    </div>
    <div class="container rounded-3 bg-white text-black p-3">
        <div class="row">
            <div class="col">Lunghezza</div>
            <div class="col">
                <form action="index.php" method="get">
                    <input class="border" type="text" name="passwordLenght">
                    <button class="btn btn-primary" type="submit" name="form">Invia</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">Pasword</div>
            <div class="col">
                <?php 
                include "functions.php";
                echo getRandomString($number);
                ?>
            </div>
        </div>
    </div>
    
    
    
    
</body>
</html>