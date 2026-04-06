<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliverySources;

trait DescribeDeliverySourcesTrait
{
    /**
     * @param DescribeDeliverySourcesRequest $args
     * @return DescribeDeliverySourcesResponse
     */
    public function describeDeliverySources(DescribeDeliverySourcesRequest $args)
    {
        $result = parent::describeDeliverySources($args->toArray());
        return new DescribeDeliverySourcesResponse($result->toArray());
    }
}
