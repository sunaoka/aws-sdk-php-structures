<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProduct;

trait UpdateProvisionedProductTrait
{
    /**
     * @param UpdateProvisionedProductRequest $args
     * @return UpdateProvisionedProductResponse
     */
    public function updateProvisionedProduct(UpdateProvisionedProductRequest $args)
    {
        $result = parent::updateProvisionedProduct($args->toArray());
        return new UpdateProvisionedProductResponse($result->toArray());
    }
}
