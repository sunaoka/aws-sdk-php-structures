<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfolioAccess;

trait ListPortfolioAccessTrait
{
    /**
     * @param ListPortfolioAccessRequest $args
     * @return ListPortfolioAccessResponse
     */
    public function listPortfolioAccess(ListPortfolioAccessRequest $args)
    {
        $result = parent::listPortfolioAccess($args->toArray());
        return new ListPortfolioAccessResponse($result->toArray());
    }
}
