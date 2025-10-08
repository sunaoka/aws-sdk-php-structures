<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeParameterGroups;

trait DescribeParameterGroupsTrait
{
    /**
     * @param DescribeParameterGroupsRequest $args
     * @return DescribeParameterGroupsResponse
     */
    public function describeParameterGroups(DescribeParameterGroupsRequest $args)
    {
        $result = parent::describeParameterGroups($args->toArray());
        return new DescribeParameterGroupsResponse($result->toArray());
    }
}
