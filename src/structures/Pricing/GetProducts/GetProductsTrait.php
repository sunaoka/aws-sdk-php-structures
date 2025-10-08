<?php

namespace Sunaoka\Aws\Structures\Pricing\GetProducts;

trait GetProductsTrait
{
    /**
     * @param GetProductsRequest $args
     * @return GetProductsResponse
     */
    public function getProducts(GetProductsRequest $args)
    {
        $result = parent::getProducts($args->toArray());
        return new GetProductsResponse($result->toArray());
    }
}
