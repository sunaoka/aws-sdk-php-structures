<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClassicLinkInstances;

trait DescribeClassicLinkInstancesTrait
{
    /**
     * @param DescribeClassicLinkInstancesRequest $args
     * @return DescribeClassicLinkInstancesResponse
     */
    public function describeClassicLinkInstances(DescribeClassicLinkInstancesRequest $args)
    {
        $result = parent::describeClassicLinkInstances($args->toArray());
        return new DescribeClassicLinkInstancesResponse($result->toArray());
    }
}
