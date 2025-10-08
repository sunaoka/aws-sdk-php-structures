<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetInstances;

trait DescribeFleetInstancesTrait
{
    /**
     * @param DescribeFleetInstancesRequest $args
     * @return DescribeFleetInstancesResponse
     */
    public function describeFleetInstances(DescribeFleetInstancesRequest $args)
    {
        $result = parent::describeFleetInstances($args->toArray());
        return new DescribeFleetInstancesResponse($result->toArray());
    }
}
