<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeProducts;

trait DescribeProductsTrait
{
    /**
     * @param DescribeProductsRequest $args
     * @return DescribeProductsResponse
     */
    public function describeProducts(DescribeProductsRequest $args)
    {
        $result = parent::describeProducts($args->toArray());
        return new DescribeProductsResponse($result->toArray());
    }
}
