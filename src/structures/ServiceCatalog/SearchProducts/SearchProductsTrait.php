<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProducts;

trait SearchProductsTrait
{
    /**
     * @param SearchProductsRequest $args
     * @return SearchProductsResponse
     */
    public function searchProducts(SearchProductsRequest $args)
    {
        $result = parent::searchProducts($args->toArray());
        return new SearchProductsResponse($result->toArray());
    }
}
