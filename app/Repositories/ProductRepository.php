<?php

namespace App\Repositories;

class ProductRepository
{
    protected $entity;

    public function __construct(Product $product) {
        $this->entity = $product;
        
    }

}