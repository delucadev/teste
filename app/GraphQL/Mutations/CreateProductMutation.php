<?php

namespace App\GraphQL\Mutations;

use App\Models\Product;
use Illuminate\Support\Facades\Log;

final class CreateProductMutation
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // Log::info($args);
        $newProduct = Product::create($args);
        return $newProduct;
    }
}
