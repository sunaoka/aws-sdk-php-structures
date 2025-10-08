<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShares;

trait DescribePortfolioSharesTrait
{
    /**
     * @param DescribePortfolioSharesRequest $args
     * @return DescribePortfolioSharesResponse
     */
    public function describePortfolioShares(DescribePortfolioSharesRequest $args)
    {
        $result = parent::describePortfolioShares($args->toArray());
        return new DescribePortfolioSharesResponse($result->toArray());
    }
}
