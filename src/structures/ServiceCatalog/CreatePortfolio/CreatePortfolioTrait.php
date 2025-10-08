<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreatePortfolio;

trait CreatePortfolioTrait
{
    /**
     * @param CreatePortfolioRequest $args
     * @return CreatePortfolioResponse
     */
    public function createPortfolio(CreatePortfolioRequest $args)
    {
        $result = parent::createPortfolio($args->toArray());
        return new CreatePortfolioResponse($result->toArray());
    }
}
