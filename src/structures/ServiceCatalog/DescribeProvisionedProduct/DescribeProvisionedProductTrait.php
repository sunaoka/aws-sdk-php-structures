<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProduct;

trait DescribeProvisionedProductTrait
{
    /**
     * @param DescribeProvisionedProductRequest $args
     * @return DescribeProvisionedProductResponse
     */
    public function describeProvisionedProduct(DescribeProvisionedProductRequest $args)
    {
        $result = parent::describeProvisionedProduct($args->toArray());
        return new DescribeProvisionedProductResponse($result->toArray());
    }
}
