<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeAllManagedProducts;

trait DescribeAllManagedProductsTrait
{
    /**
     * @param DescribeAllManagedProductsRequest $args
     * @return DescribeAllManagedProductsResponse
     */
    public function describeAllManagedProducts(DescribeAllManagedProductsRequest $args)
    {
        $result = parent::describeAllManagedProducts($args->toArray());
        return new DescribeAllManagedProductsResponse($result->toArray());
    }
}
