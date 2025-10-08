<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPrincipalsForPortfolio;

trait ListPrincipalsForPortfolioTrait
{
    /**
     * @param ListPrincipalsForPortfolioRequest $args
     * @return ListPrincipalsForPortfolioResponse
     */
    public function listPrincipalsForPortfolio(ListPrincipalsForPortfolioRequest $args)
    {
        $result = parent::listPrincipalsForPortfolio($args->toArray());
        return new ListPrincipalsForPortfolioResponse($result->toArray());
    }
}
