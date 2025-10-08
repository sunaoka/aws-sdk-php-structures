<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetInstances;

trait DescribeSpotFleetInstancesTrait
{
    /**
     * @param DescribeSpotFleetInstancesRequest $args
     * @return DescribeSpotFleetInstancesResponse
     */
    public function describeSpotFleetInstances(DescribeSpotFleetInstancesRequest $args)
    {
        $result = parent::describeSpotFleetInstances($args->toArray());
        return new DescribeSpotFleetInstancesResponse($result->toArray());
    }
}
