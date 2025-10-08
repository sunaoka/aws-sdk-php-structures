<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstances;

trait DescribeVerifiedAccessInstancesTrait
{
    /**
     * @param DescribeVerifiedAccessInstancesRequest $args
     * @return DescribeVerifiedAccessInstancesResponse
     */
    public function describeVerifiedAccessInstances(DescribeVerifiedAccessInstancesRequest $args)
    {
        $result = parent::describeVerifiedAccessInstances($args->toArray());
        return new DescribeVerifiedAccessInstancesResponse($result->toArray());
    }
}
