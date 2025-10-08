<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAvailabilityZones;

trait DescribeAvailabilityZonesTrait
{
    /**
     * @param DescribeAvailabilityZonesRequest $args
     * @return DescribeAvailabilityZonesResponse
     */
    public function describeAvailabilityZones(DescribeAvailabilityZonesRequest $args)
    {
        $result = parent::describeAvailabilityZones($args->toArray());
        return new DescribeAvailabilityZonesResponse($result->toArray());
    }
}
