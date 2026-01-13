<?php
class Customer {
    public string $firstName;
    public string $lastname;
    public string $email;
    public string $password;
    public array $accounts;

    public function __construct(string $firstName, string $lastname, array $accounts = []) {
        $this->firstName = $firstName;
        $this->lastName = $lastname;
        $this->accounts = $accounts;
    }

    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }
}
?>