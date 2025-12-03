<?php
declare(strict_types=1); 

$tax_rate = 20; 

$yogurt_products = [
    "Strawberry Yogurt" => ["price" => 80.00, "stock" => 12],
    "Vanilla Yogurt"    => ["price" => 70.00, "stock" => 26],
    "Chocolate Yogurt"  => ["price" => 90.00, "stock" => 8],
    "Mango Yogurt"      => ["price" => 85.00, "stock" => 15],
    "Blueberry Yogurt"  => ["price" => 95.00, "stock" => 5],
    "Matcha Yogurt"     => ["price" => 100.00, "stock" => 18]
];

function get_reorder_message(int $stock): string
{
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float 
{
    global $tax_rate; 
    $total = $price * $quantity;
    return $total * ($tax_rate / 100);
}
?>

<?php include 'header.php'; ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Yogurt Shop – Stock Control</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #faf4ef;
            padding: 40px;
            margin: 0;
        }
        h1 {
            color: #7b3f3f;
            text-align: center;
        }
        table {
            width: 75%;
            margin: 0 auto;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #dec3b2;
            color: #4a2c2a;
        }
    </style>
</head>

<body>

<h1>Yogurt Shop — Stock Monitoring</h1>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total Value (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

    <?php 

    foreach ($yogurt_products as $product_name => $data): 
        $price = $data["price"];   
        $stock = $data["stock"]; 
    ?>
        <tr>
            <td><?= $product_name ?></td>  
            <td><?= $stock ?></td>        
            <td><?= get_reorder_message($stock) ?></td> 
            <td>₱<?= get_total_value($price, $stock) ?></td> 
            <td>₱<?= get_tax_due($price, $stock) ?></td>    
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>

<?php include 'footer.php'; ?> 
