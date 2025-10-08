<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotPriceHistory;

trait DescribeSpotPriceHistoryTrait
{
    /**
     * @param DescribeSpotPriceHistoryRequest $args
     * @return DescribeSpotPriceHistoryResponse
     */
    public function describeSpotPriceHistory(DescribeSpotPriceHistoryRequest $args)
    {
        $result = parent::describeSpotPriceHistory($args->toArray());
        return new DescribeSpotPriceHistoryResponse($result->toArray());
    }
}
