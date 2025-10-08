<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolio;

trait DescribePortfolioTrait
{
    /**
     * @param DescribePortfolioRequest $args
     * @return DescribePortfolioResponse
     */
    public function describePortfolio(DescribePortfolioRequest $args)
    {
        $result = parent::describePortfolio($args->toArray());
        return new DescribePortfolioResponse($result->toArray());
    }
}
