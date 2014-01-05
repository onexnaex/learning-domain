<?php
namespace Ageng\Learning\Domain;
class Mahasiswa{
    protected $id;
    protected $nim;
    protected $nama;
    protected $tanggalLahir;
    protected $alamat;
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setNim($nim)
    {
        $this->nim = $nim;
    }
    
    public function getNim()
    {
        return $this->nim;
    }
    
     public function setNama($nama)
    {
        $this->nama = $nama;
    }
    
    public function getNama()
    {
        return $this->nama;
    }
     public function setTanggalLahir($tanggalLahir)
    {
        $this->tanggalLahir = $tanggalLahir;
    }
    
    public function getTanggalLahir()
    {
        return $this->tanggalLahir;
    }
     public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    
    public function getAlamat()
    {
        return $this->alamat;
    }
     
}

?>