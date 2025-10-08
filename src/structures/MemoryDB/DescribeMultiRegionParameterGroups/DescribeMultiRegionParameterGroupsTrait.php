<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeMultiRegionParameterGroups;

trait DescribeMultiRegionParameterGroupsTrait
{
    /**
     * @param DescribeMultiRegionParameterGroupsRequest $args
     * @return DescribeMultiRegionParameterGroupsResponse
     */
    public function describeMultiRegionParameterGroups(DescribeMultiRegionParameterGroupsRequest $args)
    {
        $result = parent::describeMultiRegionParameterGroups($args->toArray());
        return new DescribeMultiRegionParameterGroupsResponse($result->toArray());
    }
}
