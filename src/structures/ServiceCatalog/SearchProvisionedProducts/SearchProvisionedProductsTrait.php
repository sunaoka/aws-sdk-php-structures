<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProvisionedProducts;

trait SearchProvisionedProductsTrait
{
    /**
     * @param SearchProvisionedProductsRequest $args
     * @return SearchProvisionedProductsResponse
     */
    public function searchProvisionedProducts(SearchProvisionedProductsRequest $args)
    {
        $result = parent::searchProvisionedProducts($args->toArray());
        return new SearchProvisionedProductsResponse($result->toArray());
    }
}
