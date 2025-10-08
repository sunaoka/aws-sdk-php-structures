<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstanceAvailability;

trait DescribeScheduledInstanceAvailabilityTrait
{
    /**
     * @param DescribeScheduledInstanceAvailabilityRequest $args
     * @return DescribeScheduledInstanceAvailabilityResponse
     */
    public function describeScheduledInstanceAvailability(DescribeScheduledInstanceAvailabilityRequest $args)
    {
        $result = parent::describeScheduledInstanceAvailability($args->toArray());
        return new DescribeScheduledInstanceAvailabilityResponse($result->toArray());
    }
}
