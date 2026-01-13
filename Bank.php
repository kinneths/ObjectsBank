<?php
include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [
    new Account("20489446", "Checking", -1500),
    new Account("20148896", "Savings", 25000),
    new Account("30995521", "Payroll", 18000),
    new Account("44112233", "Investment", -3000)
];

$customer = new Customer("Juan", "Dela Cruz", $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Accounts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="bank-card">
    <img src="images/bank-logo.png" alt="Bank Logo" class="logo">

    <h2>NAME: <?php echo $customer->getFullName(); ?></h2>

    <table>
        <tr>
            <th>ACCOUNT NUMBER</th>
            <th>ACCOUNT TYPE</th>
            <th>BALANCE</th>
        </tr>

        <?php foreach ($customer->accounts as $account): ?>
        <tr>
            <td><?php echo $account->accountNumber; ?></td>
            <td><?php echo $account->accountType; ?></td>

            <?php if ($account->balance >= 0): ?>
                <td class="credit">₱ <?php echo number_format($account->balance, 2); ?></td>
            <?php else: ?>
                <td class="overdrawn">₱ <?php echo number_format($account->balance, 2); ?></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>

    </table>
</div>

</body>
</html>