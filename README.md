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

1. Clone the repo:
   ```
   https://github.com/mythofmidas/basket-php.git
   ```
   
3. Reference exam.php
   Contains some exam code.

4. Install php
   If you not installed yet, download on here.
   [Download PHP](https://www.php.net/downloads/)

5. Setting up PHP environment on your PC
   [Reference Here](https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/)

6. When you are ready, run php.
   Open a command prompt in the root directory and run this command.
   ```
   run backet.php
   ```

Enjoy yourself!!!
