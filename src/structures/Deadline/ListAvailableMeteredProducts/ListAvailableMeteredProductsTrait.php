<?php

namespace Sunaoka\Aws\Structures\Deadline\ListAvailableMeteredProducts;

trait ListAvailableMeteredProductsTrait
{
    /**
     * @param ListAvailableMeteredProductsRequest $args
     * @return ListAvailableMeteredProductsResponse
     */
    public function listAvailableMeteredProducts(ListAvailableMeteredProductsRequest $args)
    {
        $result = parent::listAvailableMeteredProducts($args->toArray());
        return new ListAvailableMeteredProductsResponse($result->toArray());
    }
}
