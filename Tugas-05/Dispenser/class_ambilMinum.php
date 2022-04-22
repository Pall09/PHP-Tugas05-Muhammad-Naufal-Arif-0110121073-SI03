<?php
    require_once 'class_dispenser.php';

    class ambilMinum extends Dispenser {
        public $volume;
        public $uangSaku;

        function __construct($namaMinuman, $volumeGelas, $harga, $uangSaku) {
            $this->uangSaku = $uangSaku;
            $this->namaMinuman = $namaMinuman;
            $this->harga = $harga;
            $this->volumeGelas = $volumeGelas;
        }

        function transaksi() {
            return  $this->uangSaku - $this->harga;
        }

        function volumeAkhir() {
            return $this->volumeGelas - $this->volume;
        }
    }
?>