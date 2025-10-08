<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDestinations;

trait DescribeDestinationsTrait
{
    /**
     * @param DescribeDestinationsRequest $args
     * @return DescribeDestinationsResponse
     */
    public function describeDestinations(DescribeDestinationsRequest $args)
    {
        $result = parent::describeDestinations($args->toArray());
        return new DescribeDestinationsResponse($result->toArray());
    }
}
