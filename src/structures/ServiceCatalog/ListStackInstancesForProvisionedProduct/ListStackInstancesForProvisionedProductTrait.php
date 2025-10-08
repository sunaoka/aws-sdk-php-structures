<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListStackInstancesForProvisionedProduct;

trait ListStackInstancesForProvisionedProductTrait
{
    /**
     * @param ListStackInstancesForProvisionedProductRequest $args
     * @return ListStackInstancesForProvisionedProductResponse
     */
    public function listStackInstancesForProvisionedProduct(ListStackInstancesForProvisionedProductRequest $args)
    {
        $result = parent::listStackInstancesForProvisionedProduct($args->toArray());
        return new ListStackInstancesForProvisionedProductResponse($result->toArray());
    }
}
