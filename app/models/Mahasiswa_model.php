<?php

class Mahasiswa_model
{
  private $mhs = [
    [
      "nama" => "rafi mz",
      "nrp" => "193040166",
      "email" => "rafimz@gmail.com",
      "jurusan" => "teknik informatika"
    ],
    [
      "nama" => "rafi",
      "nrp" => "193040167",
      "email" => "rafi@gmail.com",
      "jurusan" => "teknik informatika"
    ],
    [
      "nama" => "ahmad",
      "nrp" => "193040168",
      "email" => "ahmad@gmail.com",
      "jurusan" => "teknik informatika"
    ]
  ];

  public function getALLMahasiswa()
  {
    return $this->mhs;
  }
}
