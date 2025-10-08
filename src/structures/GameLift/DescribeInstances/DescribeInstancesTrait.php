<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeInstances;

trait DescribeInstancesTrait
{
    /**
     * @param DescribeInstancesRequest $args
     * @return DescribeInstancesResponse
     */
    public function describeInstances(DescribeInstancesRequest $args)
    {
        $result = parent::describeInstances($args->toArray());
        return new DescribeInstancesResponse($result->toArray());
    }
}
