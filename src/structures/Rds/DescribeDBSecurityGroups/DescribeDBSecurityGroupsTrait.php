<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSecurityGroups;

trait DescribeDBSecurityGroupsTrait
{
    /**
     * @param DescribeDBSecurityGroupsRequest $args
     * @return DescribeDBSecurityGroupsResponse
     */
    public function describeDBSecurityGroups(DescribeDBSecurityGroupsRequest $args)
    {
        $result = parent::describeDBSecurityGroups($args->toArray());
        return new DescribeDBSecurityGroupsResponse($result->toArray());
    }
}
