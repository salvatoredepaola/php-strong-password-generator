    
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
    <?php 
    include "functions.php";
    if(isset($form_result)) {
    ?>
        <div class="row">
            <div class="col p-0">
                <div class="alert alert-primary">
                    <?php if(!is_numeric($number)) {
                        echo 'mettere numero';
                    } else {
                        echo getRandomString($number);
                    }
                    ?>
                </div>
            </div>
        </div>

    <?php } ?>
    </div>
        
    <div class="container rounded-3 bg-white text-black p-3">
        <div class="row">
            <form action="index.php" method="get">
                <div class="row my-2">
                    <div class="col-8">
                        <label for="">Lunghezza</label>
                    </div>
                    <div class="col-4">
                        <input class="border" type="text" name="passwordLenght">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-8">
                        <label for="">insiemi di caratteri</label>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subset_azlower" value = "">
                            <label class="form-check-label" for="subset_azlower">lettere a-z</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subset_azupper" value = "">
                            <label class="form-check-label" for="subset_azupper">lettere A-Z</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="$subset_numbers" value = "">
                            <label class="form-check-label" for="$subset_numbers">lettere a-z</label>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <button class="btn btn-primary" type="submit" name="form">Invia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
    
    
</body>
</html>