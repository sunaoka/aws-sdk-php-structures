<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribePublishingDestination;

trait DescribePublishingDestinationTrait
{
    /**
     * @param DescribePublishingDestinationRequest $args
     * @return DescribePublishingDestinationResponse
     */
    public function describePublishingDestination(DescribePublishingDestinationRequest $args)
    {
        $result = parent::describePublishingDestination($args->toArray());
        return new DescribePublishingDestinationResponse($result->toArray());
    }
}
