<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMeteredProducts;

trait ListMeteredProductsTrait
{
    /**
     * @param ListMeteredProductsRequest $args
     * @return ListMeteredProductsResponse
     */
    public function listMeteredProducts(ListMeteredProductsRequest $args)
    {
        $result = parent::listMeteredProducts($args->toArray());
        return new ListMeteredProductsResponse($result->toArray());
    }
}
