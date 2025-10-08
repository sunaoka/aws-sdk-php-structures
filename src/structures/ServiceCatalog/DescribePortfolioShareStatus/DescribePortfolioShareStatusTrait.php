<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShareStatus;

trait DescribePortfolioShareStatusTrait
{
    /**
     * @param DescribePortfolioShareStatusRequest $args
     * @return DescribePortfolioShareStatusResponse
     */
    public function describePortfolioShareStatus(DescribePortfolioShareStatusRequest $args)
    {
        $result = parent::describePortfolioShareStatus($args->toArray());
        return new DescribePortfolioShareStatusResponse($result->toArray());
    }
}
