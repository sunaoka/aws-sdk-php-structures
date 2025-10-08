<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\TerminateProvisionedProduct;

trait TerminateProvisionedProductTrait
{
    /**
     * @param TerminateProvisionedProductRequest $args
     * @return TerminateProvisionedProductResponse
     */
    public function terminateProvisionedProduct(TerminateProvisionedProductRequest $args)
    {
        $result = parent::terminateProvisionedProduct($args->toArray());
        return new TerminateProvisionedProductResponse($result->toArray());
    }
}
