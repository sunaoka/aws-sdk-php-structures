<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataShares;

trait DescribeDataSharesTrait
{
    /**
     * @param DescribeDataSharesRequest $args
     * @return DescribeDataSharesResponse
     */
    public function describeDataShares(DescribeDataSharesRequest $args)
    {
        $result = parent::describeDataShares($args->toArray());
        return new DescribeDataSharesResponse($result->toArray());
    }
}
