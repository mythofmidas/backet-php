<?php

class Basket {
    private $catalogue;
    private $deliveryCharges;
    private $offers;
    private $basket = [];

    public function __construct($catalogue, $deliveryCharges, $offers) {
        $this->catalogue = $catalogue;
        $this->deliveryCharges = $deliveryCharges;
        $this->offers = $offers;
    }

    public function add($productCode) {
        if (isset($this->basket[$productCode])) {
            $this->basket[$productCode]++;
        } else {
            $this->basket[$productCode] = 1;
        }
    }

    public function total() {
        $total = 0;

        // Calculate product cost
        foreach ($this->basket as $productCode => $quantity) {
            $total += $this->catalogue[$productCode]['price'] * $quantity;

            // Apply special offers
            if ($productCode == 'red_widget' && $quantity > 1) {
                $discountedItems = intval($quantity / 2);
                $total -= $discountedItems * ($this->catalogue[$productCode]['price'] / 2);
            }
        }

        // Calculate delivery charge
        if ($total < 50) {
            $total += $this->deliveryCharges['under_50'];
        } elseif ($total < 90) {
            $total += $this->deliveryCharges['under_90'];
        }

        return number_format((float)$total, 2, '.', '');
    }
}

// Example usage
$catalogue = [
  'red_widget' => ['price' => 32.95],
  'green_widget' => ['price' => 24.95],
  'blue_widget' => ['price' => 7.95]
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

$basket->add('blue_widget');
$basket->add('blue_widget');
$basket->add('red_widget');
$basket->add('red_widget');
$basket->add('red_widget');
// $basket->add('green_widget');

echo 'Total: $' . $basket->total();

?>
