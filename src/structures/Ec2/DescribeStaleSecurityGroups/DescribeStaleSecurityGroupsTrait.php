<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStaleSecurityGroups;

trait DescribeStaleSecurityGroupsTrait
{
    /**
     * @param DescribeStaleSecurityGroupsRequest $args
     * @return DescribeStaleSecurityGroupsResponse
     */
    public function describeStaleSecurityGroups(DescribeStaleSecurityGroupsRequest $args)
    {
        $result = parent::describeStaleSecurityGroups($args->toArray());
        return new DescribeStaleSecurityGroupsResponse($result->toArray());
    }
}
