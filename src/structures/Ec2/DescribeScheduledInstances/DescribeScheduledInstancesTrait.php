<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstances;

trait DescribeScheduledInstancesTrait
{
    /**
     * @param DescribeScheduledInstancesRequest $args
     * @return DescribeScheduledInstancesResponse
     */
    public function describeScheduledInstances(DescribeScheduledInstancesRequest $args)
    {
        $result = parent::describeScheduledInstances($args->toArray());
        return new DescribeScheduledInstancesResponse($result->toArray());
    }
}
