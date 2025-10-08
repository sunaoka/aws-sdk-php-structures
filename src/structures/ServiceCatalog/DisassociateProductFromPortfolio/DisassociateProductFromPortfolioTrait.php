<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociateProductFromPortfolio;

trait DisassociateProductFromPortfolioTrait
{
    /**
     * @param DisassociateProductFromPortfolioRequest $args
     * @return DisassociateProductFromPortfolioResponse
     */
    public function disassociateProductFromPortfolio(DisassociateProductFromPortfolioRequest $args)
    {
        $result = parent::disassociateProductFromPortfolio($args->toArray());
        return new DisassociateProductFromPortfolioResponse($result->toArray());
    }
}
