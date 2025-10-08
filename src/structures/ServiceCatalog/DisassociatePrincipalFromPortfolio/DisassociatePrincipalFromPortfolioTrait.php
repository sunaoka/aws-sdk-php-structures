<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociatePrincipalFromPortfolio;

trait DisassociatePrincipalFromPortfolioTrait
{
    /**
     * @param DisassociatePrincipalFromPortfolioRequest $args
     * @return DisassociatePrincipalFromPortfolioResponse
     */
    public function disassociatePrincipalFromPortfolio(DisassociatePrincipalFromPortfolioRequest $args)
    {
        $result = parent::disassociatePrincipalFromPortfolio($args->toArray());
        return new DisassociatePrincipalFromPortfolioResponse($result->toArray());
    }
}
