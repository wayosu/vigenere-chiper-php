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
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="enkripsi_dekripsi.php">Enkripsi & Dekripsi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mb-5">
        <div class="mt-5 text-center">
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

        <div class="mb-4">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h6 class="text-center mb-3">Tabel Substitusi Algoritma Kriptografi Vigenere Chiper</h6>
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <td>A</td>
                            <td>B</td>
                            <td>C</td>
                            <td>D</td>
                            <td>E</td>
                            <td>F</td>
                            <td>G</td>
                            <td>H</td>
                            <td>I</td>
                            <td>J</td>
                            <td>K</td>
                            <td>L</td>
                            <td>M</td>
                        </tr>
                        <tr class="bg-light text-center">
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                        </tr>
                        <tr class="text-center">
                            <td>N</td>
                            <td>O</td>
                            <td>P</td>
                            <td>Q</td>
                            <td>R</td>
                            <td>S</td>
                            <td>T</td>
                            <td>U</td>
                            <td>V</td>
                            <td>W</td>
                            <td>X</td>
                            <td>Y</td>
                            <td>Z</td>
                        </tr>
                        <tr class="bg-light text-center">
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
        </div>

        <h4 class="text-center mb-5 text-uppercase">Anggota Kelompok 1</h4>
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