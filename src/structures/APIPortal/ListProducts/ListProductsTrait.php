<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProducts;

trait ListProductsTrait
{
    /**
     * @param ListProductsRequest $args
     * @return ListProductsResponse
     */
    public function listProducts(ListProductsRequest $args)
    {
        $result = parent::listProducts($args->toArray());
        return new ListProductsResponse($result->toArray());
    }
}
