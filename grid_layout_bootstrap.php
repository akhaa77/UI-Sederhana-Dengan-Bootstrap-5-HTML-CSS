<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GRID|LAYOUT</title>
    <style>
        body {
            background-color: white;
        }

        h1 {
            text-align: center;
        }

        .row {
            border: 1px solid white;
        }

        .box {
            padding: 10px;
            background: skyblue;
            margin: 1px 1px;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h1>DIGITAL TALENT | Grid dengan Bootstrap</h1>
        <div class="row">
            <div class="col">
                <div class="box">Ini Header</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <div class="box" style="height: 200px;">Ini Content</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <div class="box" style="height: 200px;">Ini Navbar</div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="box">Ini Footer</div>
            </div>
        </div>
    </div>


    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>