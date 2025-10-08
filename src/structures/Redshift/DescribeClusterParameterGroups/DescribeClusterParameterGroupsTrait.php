<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterParameterGroups;

trait DescribeClusterParameterGroupsTrait
{
    /**
     * @param DescribeClusterParameterGroupsRequest $args
     * @return DescribeClusterParameterGroupsResponse
     */
    public function describeClusterParameterGroups(DescribeClusterParameterGroupsRequest $args)
    {
        $result = parent::describeClusterParameterGroups($args->toArray());
        return new DescribeClusterParameterGroupsResponse($result->toArray());
    }
}
