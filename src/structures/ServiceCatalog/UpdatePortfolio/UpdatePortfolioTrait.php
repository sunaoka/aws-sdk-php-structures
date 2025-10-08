<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdatePortfolio;

trait UpdatePortfolioTrait
{
    /**
     * @param UpdatePortfolioRequest $args
     * @return UpdatePortfolioResponse
     */
    public function updatePortfolio(UpdatePortfolioRequest $args)
    {
        $result = parent::updatePortfolio($args->toArray());
        return new UpdatePortfolioResponse($result->toArray());
    }
}
