<?php include 'proses.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 1 - Vigenere Chiper</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">K1 - Vigenere Chiper</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mb-5">
        <div class="my-5 text-center border-bottom">
            <h1 class="display-5 fw-bold text-uppercase">Vigenere Chiper</h1>
            <div class="col-lg-8 mx-auto">
                <p class="lead mb-4">
                    Vigenère Chiper adalah salah satu penyandian teks alfabet dengan menggunakan sandi Caesar Cipher akan tetapi alfabet 
                    yang dijadikan sebagai kata kuncinya. Vigenère Chiper merupakan bentuk sederhana dari sandi substitusi polialfabetik. 
                    Vigenere Chiper termasuk dalam cipher abjad majemuk (polyalphabetic substitution Chiper) yang dipublikasikan oleh 
                    diplomat (sekaligus seorang kriptologis) Perancis, Blaise de Vigenere pada abad 16 tahun 1586 (Arjana et al. 2012).
                </p>
            </div>
        </div>

        <div class="mb-5">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="kunci">Kunci</label>
                            <input type="text" name="kunci" id="kunci" class="form-control" placeholder="kunci..." value="<?= htmlspecialchars($kunci); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="code">Plaintext / Chipertext</label>
                            <textarea name="code" id="code" class="form-control" rows="10" placeholder="plaintext / chipertext..."></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="enkripsi" class="btn btn-success" onclick="validate(1)">Enkripsi</button>
                            <button type="submit" name="dekripsi" class="btn btn-success" onclick="validate(2)">Dekripsi</button>
                            <button type="reset" class="btn btn-secondary" onclick="btnReset()">Reset</button>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="hasil">Hasil</label>
                        <textarea name="hasil" id="hasil" class="form-control" rows="15" placeholder="..." readonly><?= htmlspecialchars($code); ?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="text-center mb-5">Anggota Kelompok 1</h3>
        <div class="d-flex justify-content-center gap-5">
            <div class="d-flex flex-column align-items-center">
                <img src="assets/icaq.JPG" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Ichaq Rahim Zees</h5>
                    <p class="m-0 text-muted">532419015</p>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center">
                <img src="assets/wahyu.JPG" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Wahyu Setiawan Usman</h5>
                    <p class="m-0 text-muted">532419051</p>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center">
                <img src="assets/fahmy.jpeg" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Balqis Cipta Cinta Ramadhani</h5>
                    <p class="m-0 text-muted">532419012</p>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center">
                <img src="assets/fahmy.jpeg" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Firmansyah Butolo</h5>
                    <p class="m-0 text-muted">532419002</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-3 bg-light">
        <div class="container">
            <p class="m-0 small">© 2022 Kelompok 1. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function btnReset() {
            document.location = 'index.php';
        }
    </script>
</body>
</html>