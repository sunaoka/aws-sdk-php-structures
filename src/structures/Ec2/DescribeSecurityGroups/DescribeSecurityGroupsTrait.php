<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroups;

trait DescribeSecurityGroupsTrait
{
    /**
     * @param DescribeSecurityGroupsRequest $args
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroups(DescribeSecurityGroupsRequest $args)
    {
        $result = parent::describeSecurityGroups($args->toArray());
        return new DescribeSecurityGroupsResponse($result->toArray());
    }
}
