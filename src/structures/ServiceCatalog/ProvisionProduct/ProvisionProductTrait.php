<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ProvisionProduct;

trait ProvisionProductTrait
{
    /**
     * @param ProvisionProductRequest $args
     * @return ProvisionProductResponse
     */
    public function provisionProduct(ProvisionProductRequest $args)
    {
        $result = parent::provisionProduct($args->toArray());
        return new ProvisionProductResponse($result->toArray());
    }
}
