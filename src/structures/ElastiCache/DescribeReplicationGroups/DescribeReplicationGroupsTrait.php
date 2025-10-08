<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReplicationGroups;

trait DescribeReplicationGroupsTrait
{
    /**
     * @param DescribeReplicationGroupsRequest $args
     * @return DescribeReplicationGroupsResponse
     */
    public function describeReplicationGroups(DescribeReplicationGroupsRequest $args)
    {
        $result = parent::describeReplicationGroups($args->toArray());
        return new DescribeReplicationGroupsResponse($result->toArray());
    }
}
