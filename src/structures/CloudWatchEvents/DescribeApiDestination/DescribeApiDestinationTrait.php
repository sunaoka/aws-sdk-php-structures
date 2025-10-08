<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeApiDestination;

trait DescribeApiDestinationTrait
{
    /**
     * @param DescribeApiDestinationRequest $args
     * @return DescribeApiDestinationResponse
     */
    public function describeApiDestination(DescribeApiDestinationRequest $args)
    {
        $result = parent::describeApiDestination($args->toArray());
        return new DescribeApiDestinationResponse($result->toArray());
    }
}
