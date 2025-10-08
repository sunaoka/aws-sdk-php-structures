<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListOrganizationPortfolioAccess;

trait ListOrganizationPortfolioAccessTrait
{
    /**
     * @param ListOrganizationPortfolioAccessRequest $args
     * @return ListOrganizationPortfolioAccessResponse
     */
    public function listOrganizationPortfolioAccess(ListOrganizationPortfolioAccessRequest $args)
    {
        $result = parent::listOrganizationPortfolioAccess($args->toArray());
        return new ListOrganizationPortfolioAccessResponse($result->toArray());
    }
}
