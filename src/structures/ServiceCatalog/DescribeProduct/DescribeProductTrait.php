<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProduct;

trait DescribeProductTrait
{
    /**
     * @param DescribeProductRequest $args
     * @return DescribeProductResponse
     */
    public function describeProduct(DescribeProductRequest $args)
    {
        $result = parent::describeProduct($args->toArray());
        return new DescribeProductResponse($result->toArray());
    }
}
