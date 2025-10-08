<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ScanProvisionedProducts;

trait ScanProvisionedProductsTrait
{
    /**
     * @param ScanProvisionedProductsRequest $args
     * @return ScanProvisionedProductsResponse
     */
    public function scanProvisionedProducts(ScanProvisionedProductsRequest $args)
    {
        $result = parent::scanProvisionedProducts($args->toArray());
        return new ScanProvisionedProductsResponse($result->toArray());
    }
}
