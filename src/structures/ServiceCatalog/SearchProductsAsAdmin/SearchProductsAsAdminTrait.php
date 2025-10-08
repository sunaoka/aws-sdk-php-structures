<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProductsAsAdmin;

trait SearchProductsAsAdminTrait
{
    /**
     * @param SearchProductsAsAdminRequest $args
     * @return SearchProductsAsAdminResponse
     */
    public function searchProductsAsAdmin(SearchProductsAsAdminRequest $args)
    {
        $result = parent::searchProductsAsAdmin($args->toArray());
        return new SearchProductsAsAdminResponse($result->toArray());
    }
}
