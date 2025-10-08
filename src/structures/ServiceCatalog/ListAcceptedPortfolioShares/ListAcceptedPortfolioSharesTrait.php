<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListAcceptedPortfolioShares;

trait ListAcceptedPortfolioSharesTrait
{
    /**
     * @param ListAcceptedPortfolioSharesRequest $args
     * @return ListAcceptedPortfolioSharesResponse
     */
    public function listAcceptedPortfolioShares(ListAcceptedPortfolioSharesRequest $args)
    {
        $result = parent::listAcceptedPortfolioShares($args->toArray());
        return new ListAcceptedPortfolioSharesResponse($result->toArray());
    }
}
