<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ImportAsProvisionedProduct;

trait ImportAsProvisionedProductTrait
{
    /**
     * @param ImportAsProvisionedProductRequest $args
     * @return ImportAsProvisionedProductResponse
     */
    public function importAsProvisionedProduct(ImportAsProvisionedProductRequest $args)
    {
        $result = parent::importAsProvisionedProduct($args->toArray());
        return new ImportAsProvisionedProductResponse($result->toArray());
    }
}
