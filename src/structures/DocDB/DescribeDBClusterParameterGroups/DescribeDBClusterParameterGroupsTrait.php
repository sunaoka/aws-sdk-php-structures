<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBClusterParameterGroups;

trait DescribeDBClusterParameterGroupsTrait
{
    /**
     * @param DescribeDBClusterParameterGroupsRequest $args
     * @return DescribeDBClusterParameterGroupsResponse
     */
    public function describeDBClusterParameterGroups(DescribeDBClusterParameterGroupsRequest $args)
    {
        $result = parent::describeDBClusterParameterGroups($args->toArray());
        return new DescribeDBClusterParameterGroupsResponse($result->toArray());
    }
}
