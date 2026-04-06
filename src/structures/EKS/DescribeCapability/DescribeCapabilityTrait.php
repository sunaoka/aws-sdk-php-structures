<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCapability;

trait DescribeCapabilityTrait
{
    /**
     * @param DescribeCapabilityRequest $args
     * @return DescribeCapabilityResponse
     */
    public function describeCapability(DescribeCapabilityRequest $args)
    {
        $result = parent::describeCapability($args->toArray());
        return new DescribeCapabilityResponse($result->toArray());
    }
}
