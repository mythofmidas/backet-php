## Example

Here's an example of how to use the Basket class:

```php
$catalogue = [
 'red_widget' => ['price' => 32.95],
 'blue_widget' => ['price' => 24.95],
 'green_widget' => ['price' => 7.95]
];

$deliveryCharges = [
 'under_50' => 4.95,
 'under_90' => 2.95,
 'free' => 0
];

$offers = [
 'buy_one_get_one_half_price' => 'red_widget'
];

$basket = new Basket($catalogue, $deliveryCharges, $offers);

$basket->add('red_widget');
$basket->add('red_widget');
$basket->add('blue_widget');

echo 'Total: $' . $basket->total(); // Expected: $65.00
