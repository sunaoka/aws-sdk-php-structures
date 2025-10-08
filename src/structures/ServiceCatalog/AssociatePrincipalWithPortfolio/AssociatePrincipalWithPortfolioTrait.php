<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AssociatePrincipalWithPortfolio;

trait AssociatePrincipalWithPortfolioTrait
{
    /**
     * @param AssociatePrincipalWithPortfolioRequest $args
     * @return AssociatePrincipalWithPortfolioResponse
     */
    public function associatePrincipalWithPortfolio(AssociatePrincipalWithPortfolioRequest $args)
    {
        $result = parent::associatePrincipalWithPortfolio($args->toArray());
        return new AssociatePrincipalWithPortfolioResponse($result->toArray());
    }
}
