<?php
    require_once 'class_account.php';
    class AccountBank extends Account {
        public $costumer;

        public function __construct($no, $saldo, $cust) {
            parent::__construct($no, $saldo);
            $this->customer = $cust;
        }

        public function transfer($target, $uangTransfer) {
            $target->deposit($uangTransfer);
            $this->withdraw($uangTransfer);
        }

        public function cetak() {
            echo "Nomor : {$this->nomor}";
            echo "<br>Saldo : {$this->saldo}";
            echo "<br>Customer : {$this->customer}<hr>";
        }
        
        
    }
    $acc1 = new AccountBank('C001', 6000000, 'Ahmad');
    $acc2 = new AccountBank('C002', 5350000, 'Budi');
    $acc3 = new AccountBank('C003', 2500000, 'Kurniawan');

    $acc1->deposit(1000000); // Nabung 1.000.000
    $acc1->transfer($acc3,1500000); // Transfer 1.500.000 ke Kurniawan
    $acc1->transfer($acc2,500000); // Transfer 500.000 ke Budi
    
    $acc2->withdraw(2500000);

    $arr = [$acc1,$acc2,$acc3];
?>