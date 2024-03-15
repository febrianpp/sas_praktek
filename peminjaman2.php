
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<center><h1>PEMINJAMAN</h1></center>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="booking-form">
                <form>
                    <div class="form-group">
                        <label for="destination" class="form-label">Nama</label>
                        <input id="destination" class="form-control" type="text" placeholder="">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkin" class="form-label">Tgl_peminjaman</label>
                                <input id="checkin" class="form-control" type="date" required>
                            </div>
                        </div>
                    <div class="col-sm-4">
    <div class="form-group">
        <label for="rooms" class="form-label">Nama_brg</label>
        <input id="rooms" class="form-control" type="text" value="1">
    </div>
</div>

                        <div class="col-sm-4">
    <div class="form-group">
        <label for="adults" class="form-label">Jenis</label>
        <input id="adults" class="form-control" type="text" placeholder="">
    </div>
</div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="children" class="form-label">Jumlah</label>
                                <select id="children" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select
                            </div>
                        </div>
                    </div>
                    <div class="form-btn text-center">
                        <button class="btn btn-primary">PINJAM</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>