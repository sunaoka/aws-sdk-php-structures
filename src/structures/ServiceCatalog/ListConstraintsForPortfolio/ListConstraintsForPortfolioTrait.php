<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListConstraintsForPortfolio;

trait ListConstraintsForPortfolioTrait
{
    /**
     * @param ListConstraintsForPortfolioRequest $args
     * @return ListConstraintsForPortfolioResponse
     */
    public function listConstraintsForPortfolio(ListConstraintsForPortfolioRequest $args)
    {
        $result = parent::listConstraintsForPortfolio($args->toArray());
        return new ListConstraintsForPortfolioResponse($result->toArray());
    }
}
