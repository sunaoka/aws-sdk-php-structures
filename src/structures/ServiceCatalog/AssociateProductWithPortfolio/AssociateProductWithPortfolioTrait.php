<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AssociateProductWithPortfolio;

trait AssociateProductWithPortfolioTrait
{
    /**
     * @param AssociateProductWithPortfolioRequest $args
     * @return AssociateProductWithPortfolioResponse
     */
    public function associateProductWithPortfolio(AssociateProductWithPortfolioRequest $args)
    {
        $result = parent::associateProductWithPortfolio($args->toArray());
        return new AssociateProductWithPortfolioResponse($result->toArray());
    }
}
