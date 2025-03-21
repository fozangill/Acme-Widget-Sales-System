<?php

namespace AcmeWidgetCo;

class ProductCatalog {
    private array $products = [
        'R01' => ['name' => 'Red Widget', 'price' => 32.95],
        'G01' => ['name' => 'Green Widget', 'price' => 24.95],
        'B01' => ['name' => 'Blue Widget', 'price' => 7.95],
    ];

    public function getProduct(string $code): ?array
    {
        return $this->products[$code] ?? null;
    }
}