<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSubnetGroups;

trait DescribeClusterSubnetGroupsTrait
{
    /**
     * @param DescribeClusterSubnetGroupsRequest $args
     * @return DescribeClusterSubnetGroupsResponse
     */
    public function describeClusterSubnetGroups(DescribeClusterSubnetGroupsRequest $args)
    {
        $result = parent::describeClusterSubnetGroups($args->toArray());
        return new DescribeClusterSubnetGroupsResponse($result->toArray());
    }
}
