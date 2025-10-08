<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliveries;

trait DescribeDeliveriesTrait
{
    /**
     * @param DescribeDeliveriesRequest $args
     * @return DescribeDeliveriesResponse
     */
    public function describeDeliveries(DescribeDeliveriesRequest $args)
    {
        $result = parent::describeDeliveries($args->toArray());
        return new DescribeDeliveriesResponse($result->toArray());
    }
}
