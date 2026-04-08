<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetProduct;

trait GetProductTrait
{
    /**
     * @param GetProductRequest $args
     * @return GetProductResponse
     */
    public function getProduct(GetProductRequest $args)
    {
        $result = parent::getProduct($args->toArray());
        return new GetProductResponse($result->toArray());
    }
}
