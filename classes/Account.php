<?php

class Account {
    public string $accountNumber;
    public string $accountType;
    public float $balance;

    public function __construct($accountNumber, $accountType, $balance) {
        $this->accountNumber = $accountNumber;
        $this->accountType = $accountType;
        $this->balance = $balance;
    }
}