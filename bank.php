<?php
require_once 'Praktikum_5/class_accout.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$fadhil = new AccountBank('ABC0010', 'Fadhil', 3450000);
$kuntum = new AccountBank('ABC0011', 'kuntum', 45000);
$azizah = new AccountBank('ABC0012', 'azizah', 235000);

$fadhil->deposit(1000000);
$fadhil->cetak();

$fadhil->doTransfer($kuntum, 1000000);
$fadhil->cetak();

$fadhil->doTransfer($azizah, 500000);
$fadhil->cetak();

$kuntum->cetak();
$azizah->cetak();

?>