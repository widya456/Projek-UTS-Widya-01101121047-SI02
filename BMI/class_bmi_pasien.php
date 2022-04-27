<?php
require_once 'BMI/class_bmi.php';
require_once 'BMI/class_pasien.php';
class BMIPasien
{
    protected $tglChecked;
    protected $bmi;
    protected $pasien;

    public function __construct($kode, $nama, $gender, $tmp, $tglLahir, $email, $berat, $tinggi, $tglChecked)
    {
        $this->bmi = new BMI($berat, $tinggi);
        $this->pasien = new Pasien($kode, $nama, $gender === 'L' ? 'Pria' : 'wanita', $tmp, $tglLahir, $email);
        $this->tglChecked = $tglChecked;
    }

    public function getProperties($propertie)
    {
        return $this->{$propertie};
    }
}