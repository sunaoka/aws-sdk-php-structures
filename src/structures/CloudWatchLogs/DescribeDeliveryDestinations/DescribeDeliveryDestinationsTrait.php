<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliveryDestinations;

trait DescribeDeliveryDestinationsTrait
{
    /**
     * @param DescribeDeliveryDestinationsRequest $args
     * @return DescribeDeliveryDestinationsResponse
     */
    public function describeDeliveryDestinations(DescribeDeliveryDestinationsRequest $args)
    {
        $result = parent::describeDeliveryDestinations($args->toArray());
        return new DescribeDeliveryDestinationsResponse($result->toArray());
    }
}
