<?php
    class Account {
        public $nomor;
        public $saldo;

        public function __construct($no, $saldo) {
            $this->nomor = $no;
            $this->saldo = $saldo;
        }

        public function deposit($uang) {
            $this->saldo = $this->saldo + $uang;
        }
        public function withdraw($uang) {
            $this->saldo = $this->saldo - $uang;
        }
    }

    ?>