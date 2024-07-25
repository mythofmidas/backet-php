# Acme Widget Co - Sales System Proof of Concept

## Overview

This project implements a shopping basket system for Acme Widget Co's sales system. The system handles product additions, calculates the total cost of the basket, applies special offers, and determines the delivery charge based on the total cost.

## Features

- Initialization with product catalogue, delivery charge rules, and offers.
- Add method to add products to the basket.
- Total method to return the total cost, considering delivery and offers.

## Assumptions

- The product catalogue is an associative array with product codes as keys and product details (including price) as values.
- Delivery charges are defined in an associative array with keys representing order amount thresholds.
- Offers are currently implemented for a specific product ("buy one, get the second half price" for the red widget).

## Installation and Usage

1. Clone the repository:
git clone https://github.com/mythofmidas/AcmeWidgetCo-PHP.git

2. References exam.php: there are some exam codes.

3. intall php: if you not intall yet, download to online service
https://www.php.net/downloads

4. set PHP env on your PC: reference here
https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/

5. when you are ready, run the php: Open your cmd on root directory and run this command
php basket.php
