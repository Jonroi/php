<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <form method="post" action="htu_tarkistus.php" class="container mt-5">
        <div class="form-group">
            <label for="formGroupExampleInput" class="form-label">
                <h2>Finnish SSN Checkup</h2>
            </label>
            <input type="text" name="henkilotunnus" class="form-control" id="ssnInput" placeholder="DDMMYY-XXXC">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Check</button>
        </div>
    </form>

</body>

</html>