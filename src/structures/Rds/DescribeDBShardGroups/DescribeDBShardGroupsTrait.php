<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBShardGroups;

trait DescribeDBShardGroupsTrait
{
    /**
     * @param DescribeDBShardGroupsRequest $args
     * @return DescribeDBShardGroupsResponse
     */
    public function describeDBShardGroups(DescribeDBShardGroupsRequest $args)
    {
        $result = parent::describeDBShardGroups($args->toArray());
        return new DescribeDBShardGroupsResponse($result->toArray());
    }
}
