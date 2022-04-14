<?php

$kunci = "";
$code = "";
$valid = true;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once 'func.php';

    $kunci = $_POST['kunci'];
    $code = $_POST['code'];

    if (empty($kunci)) {
        ?>
            <script>
                alert("Tolong masukkan kunci terlebih dahulu!");
            </script>
        <?php
        $valid = false;
    } else if (empty($code)) {
        ?>
            <script>
                alert("Tolong masukkan plaintext untuk dienkripsi atau chipertext untuk didekripsi!");
            </script>
        <?php
        $valid = false;
    } else if (isset($kunci)) {
        if (!ctype_alpha($kunci)) {
            ?>
                <script>
                    alert("Kunci hanya boleh berisi karakter alfabet!");
                </script>
            <?php
			$valid = false;
		}
    }

    if ($valid) {
		if (isset($_POST['enkripsi']))
		{
			$code = enkripsi($kunci, $code);
			$error = "Plaintext berhasil dienkripsi!";
        }

		if (isset($_POST['dekripsi']))
		{
			$code = dekripsi($kunci, $code);
			$error = "Chipertext berhasil didekripsi!";

		}
    }
}