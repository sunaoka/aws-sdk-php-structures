<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBParameterGroups;

trait DescribeDBParameterGroupsTrait
{
    /**
     * @param DescribeDBParameterGroupsRequest $args
     * @return DescribeDBParameterGroupsResponse
     */
    public function describeDBParameterGroups(DescribeDBParameterGroupsRequest $args)
    {
        $result = parent::describeDBParameterGroups($args->toArray());
        return new DescribeDBParameterGroupsResponse($result->toArray());
    }
}
