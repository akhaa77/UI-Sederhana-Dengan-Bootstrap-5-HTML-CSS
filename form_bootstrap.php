<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FORM|MENU</title>
</head>

<body>
    <div class="container-fluid">
        <h1>DIGITAL TALENT : | Form dengan Bootstrap</h1>
        <!-- Form -->
        <form action="" method="">
            <!-- Nama Anda -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Anda</label>
                <input type="text" class="form-control" id="Nama">
            </div>
            <!-- Alamat Anda -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat Anda</label>
                <textarea class="form-control" id=Alamat" rows="3"></textarea>
            </div>
            <!-- Jenis Kelamin -->
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select id="jk" class="form-select">
                    <option selected>-- Pilih --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <!-- Button Save -->
            <div class="mb-3">
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        <!-- end Form -->
    </div>
    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>