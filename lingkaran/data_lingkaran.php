<?php
require_once('Praktikum_4/lingkaran/lingkaran.php');
echo "NILAI PHI " . Lingkaran::PHI;
$lingkar1 = new Lingkaran(70);
$lingkar2 = new Lingkaran(21);

echo "<br/>Luas Lingkaran I " . $lingkar1->getLuas();
echo "<br/>Luas Lingkaran II " . $lingkar2->getLuas();

echo "<br/>Keliling Lingkaran I " . $lingkar1->getKeliling();
echo "<br/>Keliling Lingkaran II " . $lingkar2->getKeliling();
?>