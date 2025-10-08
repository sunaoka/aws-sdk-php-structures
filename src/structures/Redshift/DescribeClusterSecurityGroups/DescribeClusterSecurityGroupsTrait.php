<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSecurityGroups;

trait DescribeClusterSecurityGroupsTrait
{
    /**
     * @param DescribeClusterSecurityGroupsRequest $args
     * @return DescribeClusterSecurityGroupsResponse
     */
    public function describeClusterSecurityGroups(DescribeClusterSecurityGroupsRequest $args)
    {
        $result = parent::describeClusterSecurityGroups($args->toArray());
        return new DescribeClusterSecurityGroupsResponse($result->toArray());
    }
}
